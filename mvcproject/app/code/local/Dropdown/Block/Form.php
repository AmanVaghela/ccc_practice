<?php
class Dropdown_Block_Form extends Core_Block_Template
{
    public $data;
    public function __Construct()
    {
       $this->data=$this->getRequest()->getParams('Id');
       $this->setTemplate("dropdown/form.phtml");
    }

    
    public function getDropdown()
    { 
    
        return Mage::getModel('dropdown/landlord')->getCollection();
        
    }

    public function getDropdownChild($id)
    { 
    
        return Mage::getModel('dropdown/branch')->getCollection()->addFieldToFilter('p_id',$id);
        
    }

}
?>