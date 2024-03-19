<?php
class Admin_Controller_Catalog_Category extends Core_Controller_Front_Action
{
    public function formAction()
    {
        $layout = $this->getLayout();
        // $layout->getChild('head')->addJs('js/page.js');
        // $layout->getChild('head')->addJs('js/head.js');
        // $layout->getChild('head')->addCss('css/page.css');
        // $layout->getChild('head')->addCss('css/head.css');
        // $layout->getChild('head')->addCss('skin/css/product/form.css');
        // $layout->getChild('head')->addCss('skin_1/css/style.css');
        // $layout->getChild('head')->addCss('skin_1/css/bootstrap.min.css');

        $child = $layout->getChild('content');
        

        $categoryForm = $layout->createBlock('catalog/admin_category_form')
            ->setTemplate('catalog/admin/category/form.phtml');
        $child->addChild('form', $categoryForm);
        $layout->toHtml();
    }
    public function saveAction()
    {
        $data = $this->getRequest()->getParams('category');
        $customerModel = Mage::getModel('catalog/category');
        // $productModel->setData($data);
        // print_r($productModel);
        $customerModel->setData($data)->save();
        print_r($customerModel);
    }
    public function listAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addJs('js/page.js');
        $layout->getChild('head')->addJs('js/head.js');
        $layout->getChild('head')->addCss('css/page.css');
        $layout->getChild('head')->addCss('css/head.css');
        $layout->getChild('head')->addCss('skin_1/css/style.css');
        $layout->getChild('head')->addCss('skin_1/css/bootstrap.min.css');
        $layout->getChild('head')->addCss('skin/css/product/list.css');

        $child = $layout->getChild('content');

        $productForm = $layout->createBlock('catalog/admin_category_list')
            ->setTemplate('catalog/admin/category/list.phtml');
        $child->addChild('list', $productForm);


        $layout->toHtml();

    }
    public function deleteAction(){
            
        Mage::getModel('catalog/category')
            ->load($this->getRequest()->getParams('id',0))
            ->delete();
            Header('Location:list');    

    }
}