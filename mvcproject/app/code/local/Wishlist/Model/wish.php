<?php
 class Wishlist_Model_Wish extends Core_Model_Abstract
 {
    public function init()
    {
        $this->resourceClass = "Wishlist_Model_Resource_Wish";
        $this->collectionClass = "Wishlist_Model_Resource_Collection_Wish";
        $this->modelClass = "Wishlist/Wish";
    }
    
 }
?>