<?php
class Catalog_Model_Product extends Core_Model_Abstract
{
  public function init()
  {
    //echo "123";
    $this->resourceClass="Catalog_Model_Resource_Product";
    $this->collectionClass="Catalog_Model_Resource_Collection_Product";
  }

  public function getStatus()
   {
    $mapping = [0=>'E',1=>'d'];
    if(isset($this->_data['status']))
    {
        return $mapping[$this->_data['status']];

    }
  }
  public   function _beforeSave()
    {
        if(!isset($this->_data['created_at']) ||
        $this->_data['created_at'] = "") {
            $this->_data['created_at'] = '2015-10-10';
        }
        $this->_data['updated_at'] = date('Y-m-d H:i:s');
        return $this;
    }
}
?>