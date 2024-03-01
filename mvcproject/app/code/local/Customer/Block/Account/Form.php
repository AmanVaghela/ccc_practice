<?php 

class Customer_Block_Account_Form extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate("customer/form.phtml");
    }
    public function getCustomer()
    {
        return Mage::getModel('customer/customer')->load($this->getRequest()->getParams('id',0));
    }
}

?>