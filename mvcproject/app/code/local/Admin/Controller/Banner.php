<?php

class Admin_Controller_Banner extends Core_Controller_Front_Action
{
    public function formAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('skin/css/banner/form.css');
        $child = $layout->getChild('content');

        $bannerForm = $layout->createBlock('banner/admin_form')
            ->setTemplate('banner/admin/form.phtml');
        $child->addChild('form', $bannerForm);

        $layout->toHtml();
    }

    public function saveAction()
    {
        try{
            if(!$this->getRequest()->isPost()){
                throw new Exception("Request is not Valid.");
            }
            $data = $this->getRequest()->getParams('banner');
            // if(!isset($data['price']) || !is_numeric($data['price']))
            // {
            //     throw new Exception("Price is in numeric.");
            // }
            // print_r("Data from get params <br>",$data);
            // $id = (isset($data['product_id'])) ? $data['product_id']:0;
            $bannerModel = Mage::getModel("banner/banner"); 
            $bannerModel->setData($data)->save();
            $this->setRedirect("admin/banner/form");
        }
        catch(Exception $e){
            echo($e->getMessage());
        }
        
    }

    public function listAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('skin/css/banner/list.css');
        $child = $layout->getChild('content');

        $productForm = $layout->createBlock('banner/admin_list')
            ->setTemplate('banner/admin/list.phtml');
        $child->addChild('list', $productForm);


        $layout->toHtml();

    }

    // public function deleteAction()
    // {
    //     Mage::getModel('catalog/product')
    //         ->load($this->getRequest()->getParams('id',0))
    //         ->delete();
    // }
    
}