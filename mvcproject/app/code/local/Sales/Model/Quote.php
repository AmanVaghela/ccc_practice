<?php
    class Sales_Model_Quote extends Core_Model_Abstract
    {
        public function init()
        {
            $this->resourceClass="Sales_Model_Resource_Quote";
            $this->collectionClass="Sales_Model_Resource_Collection_Quote";
            $this->modelClass="sales/quote";
        }
        protected function _beforeSave(){
            $grandTotal = 0 ;
            foreach($this->getItemCollection()->getData() as $_item){
                $grandTotal += $_item->getRowTotal();
                // var_dump($_item->getRowTotal());
            }
            $this->addData('grand_total',$grandTotal);
        }                           

        public function initQuote()
        {
            $quoteId =  Mage::getSingleton('core/session')->get('quote_id');
            $quoteId =  (!$quoteId) ? 0 : $quoteId;
            $this->load($quoteId);
            if(!$this->getId())
            {
                $quote = Mage::getModel('sales/quote')
                    ->setData(
                        [
                            'tax_percent' => 0,
                            'grand_total' => 0,
                            'order_id' =>0,
                            'payment_id'=>0,
                            'shipping_id'=>0
                        ]
                    )
                    ->save();
                Mage::getSingleton('core/session')->set('quote_id',$quote->getId());
                $this->load($quote->getId());
                //print_r($quote);
            }
        }
        public function addProduct($product)
        {
            $this->initQuote();
            print_r($this);
            if($this->getId())
            {
                Mage::getModel('sales/quote_item')->addItem($this,$product['product_id'],$product['qty']);
                $this->save();
            }
        }
        public function getItemCollection()
        {
            return Mage::getModel('sales/quote_item')->getCollection()
                         ->addFieldToFilter('quote_id',$this->getId());
     
         }

         public function updateTotal()
         {
            $this->initQuote();
            $this->save();
         }

         public function removeProduct($itemId)
         {
             $this->initQuote();
     
             if ($this->getId()) {
                 $itemModel = Mage::getModel('sales/quote_item')->load($itemId);
                 $itemModel->delete();
                 $this->save();
             }
         }
     
         public function updateProduct($updateData)
         {
             $this->initQuote();
     
             if ($this->getId()) {
                 $itemData = Mage::getModel('sales/quote_item')->load($updateData['item_id']);
                 $itemData->addData('qty', $updateData['new_qty']);
                 $itemData->save();
                 $this->save();
             }
         }
         
     
         public function addAddress($address)
         {
             $this->initQuote();
             if ($this->getId()) {
                 $id = Mage::getSingleton('core/session')->get('logged_in_customer_id');
                 $email = Mage::getModel('customer/account')->load($id)->getCustomerEmail();
                 Mage::getModel('sales/quote_customer')
                     ->setData($address)
                     ->addData('quote_id', $this->getId())
                     ->addData('customer_id', Mage::getSingleton('core/session')->get('logged_in_customer_id'))
                     ->addData('email', $email)
                     ->save();
             }
     
             return $this;
         }
     
         public function addPayment($payment)
         {
             $this->initQuote();
             if ($this->getId()) {
                 return Mage::getModel('sales/quote_payment')
                     ->setData($payment)
                     ->addData('quote_id', $this->getId())
                     ->save();
             }
     
         }
     
         public function addShipping($shipping)
         {
             $this->initQuote();
             if ($this->getId()) {
                 return Mage::getModel('sales/quote_shipping')
                     ->setData($shipping)
                     ->addData('quote_id', $this->getId())
                     ->save();
             }
     
         }
     
         public function addPaymentId($payId)
         {
             $this->initQuote();
             if ($this->getId()) {
                 $this->addData('payment_id', $payId)
                     ->save();
             }
         }
     
         public function addShippingId($shipId)
         {
             $this->initQuote();
             if ($this->getId()) {
                 $this->addData('shipping_id', $shipId)
                     ->save();
             }
         }
     
         public function convert()
         {
             $this->initQuote();
             if ($this->getId()) {
                 $order = $this->convertQuoteToOrder();
                 $orderId = $order->getId();
                 $address = $this->convertQuoteAddToOrderAdd($orderId);
                 $item = $this->convertItemCollection($orderId);
                 $payment = $this->convertPayment($orderId);
                 $shipping = $this->convertShipping($orderId);
                 $this->addData('order_id', $order->getId())->save();
     
     
                 Mage::getSingleton('sales/order')->setPayAndShip();
             }
         }
     
         public function convertItemCollection($orderId)
         {
             foreach ($this->getItemCollection()->getData() as $_item) {
                 Mage::getModel('sales/order_item')
                     ->setData($_item->getData())
                     ->removeData('item_id')
                     ->removeData('quote_id')
                     ->addData('order_id', $orderId)
                     ->save();
             }
             return $this;
         }
     
         public function convertQuoteToOrder()
         {
             return Mage::getModel('sales/order')
                 ->setData($this->getData())   
                 ->removeData('quote_id')
                 ->removeData('order_id')
                 ->removeData('payment_id')
                 ->removeData('shipping_id')
                 ->save();
     
         }
     
         public function convertQuoteAddToOrderAdd($orderId)
         {
     
             if ($this->getId()) {
     
                 $data = Mage::getModel('sales/quote_customer')
                     ->getCollection()
                     ->addFieldToFilter('quote_id', $this->getId())
                     ->getFirstItem();
                     // print_r($data->getData());die;
                 return Mage::getModel('sales/order_customer')
                     ->setData($data->getData())                     
                     ->removeData('quote_customer_id')
                     ->removeData('quote_id')
                     ->addData('order_id', $orderId)
                     ->save();
             }
         }
     
         public function convertPayment($orderId)
         {
             if ($this->getId()) {
                 $data = Mage::getModel('sales/quote_payment')
                     ->getCollection()
                     ->addFieldToFilter('quote_id', $this->getId())
                     ->getFirstItem();
                 return Mage::getModel('sales/order_payment')
                     ->setData($data->getData())  
                     ->removeData('payment_id')
                     ->removeData('quote_id')
                     ->addData('order_id', $orderId)
                     ->save();
             }
         }
     
         public function convertShipping($orderId)
         {
             if ($this->getId()) {
             $data = Mage::getModel('sales/quote_shipping')
                 ->getCollection()
                 ->addFieldToFilter('quote_id', $this->getId())
                 ->getFirstItem();
             return Mage::getModel('sales/order_shipping')
                 ->setData($data->getData())  
                 ->removeData('shipping_id')
                 ->removeData('quote_id')
                 ->addData('order_id', $orderId)
                 ->save();
             }
         }
        

    }
?>