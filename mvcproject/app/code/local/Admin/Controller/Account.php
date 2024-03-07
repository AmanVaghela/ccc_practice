<?php

class Admin_Controller_Account extends Core_Controller_Admin_Action
{
    protected $_allowActions = [
        "login",
    ] ;
    public function testAction() {
        echo " protected";
    }
    // public function loginAction()
    // {
    //     var_dump(Admin_Model_User::USERNAME);
    //     // $username = $_POST
    //     // $password = $_POST
        
    //     // if(post data with model constant)
    // }
    public function loginAction()
    {
        $layout = $this->getLayout();
        // $layout->getChild('head')->addCss('skin/assets/css/style.css');
        //     $layout->getChild('head')->addCss('skin/assets/css/bootstrap.min.css');
        //     $layout->getChild('head')->addCss('skin/assets/css/plugins/owl-carousel/owl.carousel.css');
        //     $layout->getChild('head')->addCss('skin/assets/css/plugins/magnific-popup/magnific-popup.css');
    
        //     $layout->getChild('head')->addJs('skin/assets/js/jquery.min.js');
        //     $layout->getChild('head')->addJs('skin/assets/js/bootstrap.bundle.min.js');
        //     $layout->getChild('head')->addJs('skin/assets/js/jquery.hoverIntent.min.js');
        //     $layout->getChild('head')->addJs('skin/assets/js/jquery.waypoints.min.js');
        //     $layout->getChild('head')->addJs('skin/assets/js/superfish.min.js');
        //     $layout->getChild('head')->addJs('skin/assets/js/owl.carousel.min.js');
        //     $layout->getChild('head')->addJs('skin/assets/js/jquery.magnific-popup.min.js');
        //     $layout->getChild('head')->addJs('skin/assets/js/main.js');


        // $layout->getChild('head')->addCss('libs/bootstrap/css/bootstrap.min.css');
        // $layout->getChild('head')->addCss('css/styles.min.css');
        // $layout->getChild('head')->addCss('css/icons.css');
        //$layout->getChild('footer')->addJs('libs/bootstrap/js/bootstrap.bundle.min.js');
        $child = $layout->getChild('content');

        $loginForm = $layout->createBlock('admin/account')
            ->setTemplate('core/admin.phtml');
        $child->addChild('form', $loginForm);
        $layout->toHtml();
    }

}

?>