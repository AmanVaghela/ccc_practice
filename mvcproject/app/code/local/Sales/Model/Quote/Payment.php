<?php 
    class Sales_Model_Quote_Payment extends Core_Model_Abstract
    {
        public function init()
        {
            $this->modelClass="sales/quote_payment";
            $this->resourceClass="Sales_Model_Resource_Quote_Payment";
            $this->collectionClass="Sales_Model_Resource_Collection_Quote_Payment";
        }

        public function _afterSave()
        {
            $paymentId =0;
            foreach($this->getPaymentCollection()->getData() as $_payment)
            {
                $paymentId = $_payment->getPaymentId();
            }
            $data=[
                'quote_id' => Mage::getSingleton('core/session')->get('quote_id'),
                'payment_id'=>$paymentId
            ];
            Mage::getModel('sales/quote')->setData($data)->save();
        }

        public function getPaymentCollection()
        {
            return Mage::getModel('sales/quote_payment')->getCollection()
                         ->addFieldToFilter('quote_id', Mage::getSingleton('core/session')->get('quote_id'));
     
        }
    }