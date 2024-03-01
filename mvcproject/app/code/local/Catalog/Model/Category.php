<?php
   class Catalog_Model_Category
   {
      public function init()
      {
          $this->resourceClass = "Catalog_Model_Resource_Catagory";
          $this->collectionClass = "Catalog_Model_Resource_Collection_Catagory";
          $this->modelClass = "catalog/catagory";
      }
   }
?>