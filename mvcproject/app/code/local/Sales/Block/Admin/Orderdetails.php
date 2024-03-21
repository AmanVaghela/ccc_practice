<?php 
    class Sales_Block_Admin_Orderdetails extends Core_Block_Template
    {
        public function __construct()
        {
            $this->setTemplate('sales/admin/orderdetails.phtml');
        }
        public function getOrderItem()
        {
            return Mage::getModel('sales/order_item')->getCollection();
        }
    }