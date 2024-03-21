<?php

class Sales_Controller_Quote extends Core_Controller_Front_Action
{
    public function addAction()
    {
        $data = $this->getRequest()->getParams('cart');
        echo "<pre>";
        print_r($data);
        Mage::getSingleton('sales/quote')->addProduct($data);
        $this->setRedirect('sales/quote/view');

    }

    public function viewAction()
    {
        $layout = $this->getLayout();
        $childContent = $layout->getChild('content');
        $cartView=$layout->createBlock('sales/view');
        $childContent->addChild( 'cart',$cartView);
        $layout->toHtml();
    }
    public function checkoutAction()
        {
            $customerId = Mage::getSingleton('core/session')->get("logged_in_customer_id");
            if(!$customerId)
            {
                $this->setRedirect('customer/account/login');
            }
            else
            {
                $layout = $this->getLayout();
                $layout->getChild('head')->addCss('skin/css/sales/checkout.css');
                $childContent = $layout->getChild('content');
                $cartView=$layout->createBlock('sales/checkout');
                $childContent->addChild( 'cart',$cartView);
                $layout->toHtml();

            }
        }

        public function deleteAction()
        {
            Mage::getModel('sales/quote_item')
                ->load($this->getRequest()->getParams('id',0))
                ->delete();
                Mage::getModel('sales/quote')->updateTotal();
            $this->setRedirect('sales/quote/view');
        }

        public function saveAction()
        {
            $data=$this->getRequest()->getParams('sales_quote_customer');
            $salesQuoteCustomer = Mage::getModel('sales/quote_customer');
            $data['customer_id']=Mage::getSingleton('core/session')->get('logged_in_customer_id');
            $data['quote_id']=Mage::getSingleton('core/session')->get('quote_id');
            $salesQuoteCustomer->setData($data);
            $salesQuoteCustomer->save();

            $shipping=$this->getRequest()->getParams('sales_quote_shipping');
            $salesQuoteShipping = Mage::getModel('sales/quote_shipping');
            $shipping['quote_id']=Mage::getSingleton('core/session')->get('quote_id');
            $salesQuoteShipping->setData($shipping);
            $salesQuoteShipping->save();

            $payment=$this->getRequest()->getParams('sales_quote_payment');
            $salesQuotePayment = Mage::getModel('sales/quote_payment');
            $payment['quote_id']=Mage::getSingleton('core/session')->get('quote_id');
            $salesQuotePayment->setData($payment);
            $salesQuotePayment->save();

            Mage::getSingleton('sales/quote')->convert();
            Mage::getSingleton('core/session')->remove('quote_id');


            
            // $sales=Mage::getModel('sales/quote');
            // $sales->addData('payment_id',);
            // $this->setRedirect('sales/quote/shipping');
        
        }

}