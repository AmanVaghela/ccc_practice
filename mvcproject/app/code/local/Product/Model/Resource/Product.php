<?php

class Product_Model_Resource_Product
{
    protected $_tabelName = null;
    protected $_primaryKey = null;
    public function __construct()
    {
        $this->init();
    }
    public function getPrimaryKey()
    {
        return $this->_primaryKey;
    }
    public function getTableName()
    {
        return $this->_tabelName;
    }
    public function getAdapter()
    {
        return new Core_Model_DB_Adapter();
    }
    public function load($id, $columns = null)
    {
        $sql = "SELECT * FROM {$this->_tabelName} WHERE {$this->_primaryKey} = {$id} LIMIT 1";
        return $this->getAdapter()->fetchRow($sql);
    }
    // Above all code move to resourse abstract
    public function init()
    {
        $this->_tabelName = "ccc_product";
        $this->_primaryKey = "id";
    }
}

?>