<?php
class Wishlist_Block_List extends Core_Block_Template
{
    public function __Construct()
    {
        $this->setTemplate("wishlist/list.phtml");
    }
    // public function getWishlist()
    // {
    //     $listModel = Mage::getModel('wishlist/wishlist')->getCollection();
    //     return $listModel;
    // }
}
?>