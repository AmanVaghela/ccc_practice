<?php

class sales_Controller_Quote extends Core_Controller_Front_Action{
    public function addAction(){
        echo 123;
        echo "<pre>";
        $data=$this->getRequest()->getParams('cart');
        print_r($data);

        $productModel=Mage::getModel('sales/Quote');
        $productModel->setData($data);
        print_r($productModel);
    }
}

?>