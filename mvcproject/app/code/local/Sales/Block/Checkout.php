<?php
    class Sales_Block_Checkout extends Core_Block_Template
    {
        public function __construct()
        {
            $this->setTemplate('sales/checkout.phtml');
        }

        public function getAddressData()
        {
            $customerId=Mage::getSingleton('core/session')->get('logged_in_customer_id');
            return Mage::getModel('customer/address')->getCollection()->addFieldToFilter('customer_id',$customerId);
        }
    }