<?php

class Customer_Block_Account_Form extends Core_Block_Template
{
    public function getCustomer()
    {
      return Mage :: getModel('customer/account')
            ->load($this->getRequest()->getParams('id',0));

    } 
}