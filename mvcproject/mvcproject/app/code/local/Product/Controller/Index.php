<?php
class Product_Controller_Index extends Core_Controller_Front_Action
{
    public function indexAction()
    {
        // echo 2323 ;
        echo"<pre>";
        $layout = $this->getLayout();
        $layout->getChild('head')->addJs('js/page.js');
        $layout->getChild('head')->addJs('js/page.js');
        $layout->getChild('head')->addCss('css/page.js');
        $layout->getChild('head')->addCss('css/page.js');
        /*->toHTML()*/;
        $layout->toHtml();
       
    }
}
?>