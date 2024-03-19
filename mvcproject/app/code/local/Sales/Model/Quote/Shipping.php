<?php
    class Sales_Model_Quote_Shipping extends Core_Model_Abstract
    {
        public function init()
        {
            $this->modelClass="sales/quote_shipping";
            $this->resourceClass="Sales_Model_Resource_Quote_Shipping";
            $this->collectionClass="Sales_Model_Resource_Collection_Quote_Shipping";
        }
        public function _afterSave()
        {
            $shippingId =0;
            foreach($this->getShippingCollection()->getData() as $_shipping)
            {
                $shippingId = $_shipping->getShippingId();
            }
            $data=[
                'quote_id' => Mage::getSingleton('core/session')->get('quote_id'),
                'shipping_id'=>$shippingId
            ];
            Mage::getModel('sales/quote')->setData($data)->save();
        }

        public function getShippingCollection()
        {
            return Mage::getModel('sales/quote_shipping')->getCollection()
                         ->addFieldToFilter('quote_id', Mage::getSingleton('core/session')->get('quote_id'));
     
        }
    }