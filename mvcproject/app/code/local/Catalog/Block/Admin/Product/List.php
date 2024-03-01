<?php

class Catalog_Block_Admin_Product_List extends Core_Block_Template
{
    protected $_catagoryData = [];
    public function __construct()
    {
        $this->setTemplate('catalog/admin/product/list.phtml');
    }
    public function getCollection()
    {
        return Mage::getModel('catalog/product')->getCollection();
    }
    public function getCatagoryName($id=null)
    {
        if(!$id){
            return "";
        }
        if(!$this->_catagoryData)
        {
            $this->_catagoryData = Mage::getModel('catalog/product')->getCatagoriesIdName();
        }
        if($this->_catagoryData && isset($this->_catagoryData[$id])){
            return $this->_catagoryData[$id];
        }
        return "";
    }
}

?>