<?php
    class Catalog_Controller_Category extends Core_Controller_Front_Action
    {
        public function viewAction()
        {
            $layout = $this->getLayout();
            // $layout->getChild('head')->addJs('js/page.js');
            // $layout->getChild('head')->addJs('js/head.js');
            // $layout->getChild('head')->addCss('css/page.css');
            // $layout->getChild('head')->addCss('css/head.css');
            // $layout->getChild('head')->addCss('skin_1/css/style.css');
            // $layout->getChild('head')->addCss('skin_1/css/bootstrap.min.css');
            // $layout->getChild('head')->addCss('skin/css/product/list.css');
            $child = $layout->getChild('content');
    
            $categoryView = $layout->createBlock('catalog/category_view')
                ->setTemplate('catalog/category/view.phtml');
            $child->addChild('view', $categoryView);
    
    
            $layout->toHtml();
    
        }
    }
?>