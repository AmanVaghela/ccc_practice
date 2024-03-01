<?php

class Admin_Controller_Catalog_Product extends Core_Controller_Admin_Action
{
    protected $_allowActions = [
        "list",
    ] ;
    public function saveAction()
    {
        try{
            if(!$this->getRequest()->isPost()){
                throw new Exception("request is not Valid");
            }
            $data = $this->getRequest()->getParams('catalog_product');
            if(!isset($data['price']) || !is_numeric($data['price']))
            {
                throw new Exception("price is in numeric");
            }
            // print_r("Data from get params <br>",$data);
            // $id = (isset($data['product_id'])) ? $data['product_id']:0;
            $productModel = Mage::getModel("catalog/product");
            $productModel->setData($data)->save();
            $this->setRedirect("admin/catalog_product/form?id={$productModel->getId()}");
        }
        catch(Exception $e){
            var_dump($e->getMessage());
        }
        
    }
    public function formAction()
    {
        $layout = $this->getLayout();
        $child = $layout->getChild('content');
        $productForm =  $layout->createBlock('catalog/admin_product_form');
        // print_r($productForm);
        $child->addChild('productForm',$productForm);
        $layout->toHtml();
    }
    public function listAction()
    {
        $layout = $this->getLayout();
        $child = $layout->getChild('content');
        $productList =  $layout->createBlock('catalog/admin_product_list');
        $child->addChild('productList',$productList);
        $layout->toHtml();
    }
    public function deleteAction()
    {
        Mage::getModel('catalog/product')
            ->load($this->getRequest()->getParams('id',0))
            ->delete();
    }
}

?>