<?php 

class Customer_Controller_Account extends Core_Controller_Front_Action
{
   
    protected $_loginRequiredActions = [
        'dashboard'
    ];

    public function __construct()
    {
        $this->init();
    }

    public function init(){
        $action = $this->getRequest()->getActionName();
        if( in_array($action, $this->_loginRequiredActions) ) {
            $customerId = Mage::getSingleton('core/session')
                ->get('logged_in_customer_id');
            if( !$customerId ) {
                $this->setRedirect('customer/account/login');
                exit() ;
            }
        }
        
        
    }
    public function registerAction()
    {
        $layout = $this->getLayout();
        $child = $layout->getChild("content");
        $layout->removeChild('header');
        $layout->removeChild('footer');
        $customerForm = $layout->createBlock("customer/form");
        $child->addChild("customerForm",$customerForm);
        $layout->toHtml();
    }
    public function saveAction()
    {
        // echo "in save action from register page";
        try{
            if(!$this->getRequest()->isPost())
            {
                throw new Exception("Request is not valid");
            }
            $data = $this->getRequest()->getParams('customer');
            // echo "<pre>";
            // print_r($data);
            if(!isset($data['billing_phone']) || !is_numeric($data['billing_phone']))
            {
                throw new Exception('Billing phone must in number');
            }
            $customerModel = Mage::getModel('customer/customer');
            $customerModel->setData($data)->save();
        }
        catch(Exception $e){
            var_dump($e->getMessage());
        }
    }
    public function loginAction()
    {
        if(!$this->getRequest()->isPost())
        {
            $layout = $this->getLayout();
            $child = $layout->getChild('content');
            // $layout->removeChild('header');
            // $layout->removeChild('footer');
            // $layout->getChild('head')->addJs('skin/js/jquery-3.7.1.min.js');
            $loginForm = $layout->createBlock('customer/account_login');
            $child->addChild('customerLogin',$loginForm);
            $layout->toHtml();
        }
        else{
            try{
                $data = $this->getRequest()->getParams('login');
                $message = [];
                // echo "<pre>";
                // print_r($data);
                $custmerModel = Mage::getSingleton("customer/customer")->getCollection()
                ->addFieldToFilter('customer_email',$data['customer_email'])
                ->addFieldToFilter('password',$data['password']) ;
                $dataModel = $custmerModel->getData();
                if(sizeof($dataModel) == 0)
                {
                    throw new Exception('Email Id And Password Is Invalid');
                }
                else{
                    foreach($dataModel as $data)
                    {
                        echo "<pre>";
                        Mage::getSingleton('core/session')->set('logged_in_customer_id', $data->getCustomerId());
                        $this->setRedirect('customer/account/dashboard');
                        print_r($data);
                        // Mage::getSingleton('core/session')->set('logged_in_customer_id',$data->getCustomerId());
                        $message = [
                            'type'=>'success',
                            'message'=> 'Successful'
                        ];
                        // echo "Login Successful";
                    }
                }
                // $custmerModel->getData()->getCustomerEmail();
                // print_r($data);
            }
            catch(Exception $e){
                // var_dump($e->getMessage());
                $message = [
                    'type'=>'error',
                    'message'=> $e->getMessage()
                ];
            }
            echo json_encode($message);
        }
    }
    public function listAction()
    {
        // echo"<pre>";
        $layout = $this->getLayout();
        // $layout->getChild('head')->addJs('js/page.js');
        // $layout->getChild('head')->addJs('js/head.js');
        // $layout->getChild('head')->addCss('css/page.css');
        // $layout->getChild('head')->addCss('css/head.css');
        // $layout->getChild('head')->addCss('skin/css/product/list.css');
        $child = $layout->getChild('content');
        $customerForm = $layout->createBlock('customer/account_list');
        $child->addChild('list', $customerForm);
        $layout->toHtml();

    }
    public function dashboardAction()
    {
        ;
        
        
            $layout = $this->getLayout()
                ;
            $child = $layout->getChild('content');
            $customerDashboard = $layout->createBlock('customer/dashboard');
            $child->addChild('customerDashboard',$customerDashboard);
            $layout->toHtml();
        
        
    }
}

?>