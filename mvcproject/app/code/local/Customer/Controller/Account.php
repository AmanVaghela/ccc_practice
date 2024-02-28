<?php

class Customer_Controller_Account extends Core_Controller_Front_Action
{
    public function registerAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addJs('js/page.js');
        $layout->getChild('head')->addJs('js/head.js');
        $layout->getChild('head')->addCss('css/page.css');
        $layout->getChild('head')->addCss('css/head.css');
        // $layout->getChild('head')->addCss('skin/css/product/form.css');
        $child = $layout->getChild('content');

        $customerForm = $layout->createBlock('customer/account_form')->setTemplate('customer/account/form.phtml');
        $child->addChild('form', $customerForm);


        $layout->toHtml();

    }   
    public function loginAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addJs('js/page.js');
        $layout->getChild('head')->addJs('js/head.js');
        $layout->getChild('head')->addCss('css/page.css');
        $layout->getChild('head')->addCss('css/head.css');
        // $layout->getChild('head')->addCss('skin/css/product/form.css');
        $child = $layout->getChild('content');

        $loginForm = $layout->createBlock('customer/account_form')->setTemplate('customer/account/login.phtml');
        $child->addChild('form', $loginForm);


        $layout->toHtml();

    }

    public function saveAction()
    {
        // echo 123;
        $data = $this->getRequest()->getParams('customer');
        echo "<pre>";
        //print_r($data);
        // die;
        $customerModel = Mage::getModel('customer/account');
        $customerModel->setData($data)->save();
        print_r($customerModel);
        

    }
}