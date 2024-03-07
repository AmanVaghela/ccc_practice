<?php
class Wishlist_Model_Resource_Wish extends Core_Model_Resource_Abstract
{
    public function init()
    {
        $this->_tableName = "ccc_wishlist";
        $this->_primaryKey = "id";
    }

}
?>