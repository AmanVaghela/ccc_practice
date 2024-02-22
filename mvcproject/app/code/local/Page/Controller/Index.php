<?php
    class Page_Controller_Index extends Core_Controller_Front_Action
    {
        public function indexAction()
        {
            //echo "<pre>";
            $layout = $this->getLayout();
            $layout->getChild('head')->addJs('js/page.js');
            $layout->getChild('head')->addJs('js/head.js');
            $layout->getChild('head')->addCss('css/page.css');
            $layout->getChild('head')->addCss('css/head.css');
            $child =$layout->getChild('content');
            $banner = $layout->createBlock('core/template')->setTemplate('page/banner.phtml');
            $child->addChild('banner',$banner);
            //print_r($layout);

            $layout->toHtml();
        }
    }
?>