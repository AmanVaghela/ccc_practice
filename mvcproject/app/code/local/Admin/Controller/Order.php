<?php
    class Admin_Controller_Order extends Core_Controller_Admin_Action
    {
        public function orderAction()
        {
            $layout = $this->getLayout();
           //$layout->getChild('head')->addCss('skin/css/admin/order.css');
            $childContent = $layout->getChild('content');
            $orderView = $layout->createBlock('sales/admin_order');
            $childContent->addChild('order', $orderView);
            $layout->toHtml();
        }
        public function orderdetailAction()
        {
            $layout = $this->getLayout();
            $layout->getChild('head')->addCss('skin/css/admin/order.css');
            $childContent = $layout->getChild('content');
            $orderdetailsView = $layout->createBlock('sales/admin_orderdetails');
            $childContent->addChild('order', $orderdetailsView);
            $layout->toHtml();
        }
        public function updateStatusAction()
        {
            $data = $this->getRequest()->getParams('order_status');
            Mage::getModel('sales/order')->setData($data)->save();
            $this->setRedirect('admin/order/order');
        }
    }