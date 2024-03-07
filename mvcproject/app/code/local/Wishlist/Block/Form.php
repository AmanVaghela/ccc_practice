<?php
class Wishlist_Block_Form extends Core_Block_Template
{
    public function __Construct()
    {
        $this->setTemplate("wishlist/form.phtml");
    }

    
    public function getWishlist()
    {
        return Mage::getModel('wishlist/wish')->getCollection();
    }

}
?>