<?php

class sales_Controller_Quote extends Core_Controller_Front_Action{
    public function addAction(){
       // echo 123;
       // echo "<pre>";
        $data=$this->getRequest()->getParams('cart');
        print_r($data);

        $productModel=Mage::getModel('sales/Quote');
        $productModel->setData($data);
        print_r($productModel);
    }

    // public function deleteAction()
    // {
    //     $quoteId = $this->getRequest()->getParams('quote_id');
    //     $itemId = $this->getRequest()->getParams('item_id');

    //     $request = ['quote_id' => $quoteId, 'item_id' => $itemId];
    //     $quote = Mage::getSingleton("sales/quote")
    //         ->deleteProduct($request);

    //     $this->setRedirect('cart/cart/view');
    // }

    // public function updateAction()
    // {
    //     $request = $this->getRequest()->getParams('update_item');

    //     $quote = MAge::getSingleton("sales/quote")
    //         ->updateProduct($request);

    //     $this->setRedirect('cart/cart/view');
    // }

}

?>