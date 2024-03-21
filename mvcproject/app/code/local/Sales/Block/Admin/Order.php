<?php
  class Sales_Block_Admin_Order extends Core_Block_Template
  {
    public function __construct()
    {
        $this->setTemplate("sales/admin/order.phtml");
    }
    
    public function getOrder()
    {
        return Mage::getModel('sales/order')->getCollection();
    }
    
}
  
?>