<?php
class Wishlist_Model_Resource_Wishlist extends Core_Model_Resource_Abstract
{
    public function init()
    {
        $this->_tableName = "ccc_Wishlist_user";
        $this->_primaryKey = "id";
    }

}
?>