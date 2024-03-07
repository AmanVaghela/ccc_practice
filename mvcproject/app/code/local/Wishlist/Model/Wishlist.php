<?php
 class Wishlist_Model_Wishlist extends Core_Model_Abstract
 {
    public function init()
    {
        $this->resourceClass = "Wishlist_Model_Resource_Wishlist";
        $this->collectionClass = "Wishlist_Model_Resource_Collection_Wishlist";
        $this->modelClass = "Wishlist/Wishlist";
    }
    
 }
?>