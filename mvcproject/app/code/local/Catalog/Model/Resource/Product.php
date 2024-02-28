<?php
class Catalog_Model_Resource_Product extends Core_Model_Resource_Abstract
{
    
    public function init()
    {
        $this->_primaryKey = "product_id";
        $this->_tableName = "catalog_product";
    }
}
