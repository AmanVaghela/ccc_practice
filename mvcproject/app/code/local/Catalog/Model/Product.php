<?php
class Catalog_Model_Product extends Core_Model_Abstract
{
  public function init()
  {
    echo "123";
    $this->resourceClass="Catalog_Model_Resource_Product";
    $this->collectionClass="Catalog_Model_Resource_Collection_Product";
  }
}
?>