<?php
    class Core_Model_Request
    {   
        protected $_moduleName;
        protected $_controllerName;
        protected $_actionName;
        public function __construct(){
            $uri = $this->getRequestUri();
            // if(strpos($uri ,'?'))
            // {
            //     $pos=strpos($uri ,'?');
            //     $temp_uri = substr($uri ,$pos);
            //     //echo $temp_uri;
            //     $uri  = str_replace($temp_uri, "", $uri);
            //     //echo $uri;
            // }
            $uri = explode("?", $uri);
            // print_r($uri);
            $uri = array_filter(explode("/", $uri[0]));
            // print_r($uri);

            $this->_moduleName = isset($uri[0]) ? $uri[0] :'page';
            $this->_controllerName = isset($uri[1]) ? $uri[1] :'index';
            $this->_actionName = isset($uri[2]) ? $uri[2] :'index';

           
        }

        public function getParams($key = '',$arg=null) 
        {
            return ($key == '')
                ? $_REQUEST
                : (isset($_REQUEST[$key])
                    ? $_REQUEST[$key]
                    : ''
                );
        }

        public function getPostData($key = '',$arg = null) {
            return ($key == '')
                ? $_REQUEST
                : (isset($_REQUEST[$key])
                    ? $_REQUEST[$key]
                    : ((!is_null ($arg))? $arg:'')
                );
        }

        public function getQueryData($key = '') {
            return ($key == '')
                ? $_GET
                : (isset($_GET[$key])
                    ? $_GET[$key]
                    : ''
                );
        }

        public function isPost()
        {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                return true;
            }
            return false;
        }

        public function getRequestUri()
        {
            $requestURI =$_SERVER['REQUEST_URI'];
            $requestURI = str_replace("/Cybercom_PHP/mvcproject/","",$requestURI);
            return $requestURI;
        }

        public function getActionName()
        {
            return $this->_actionName;
        }
        public function getControllerName()
        {
            return $this->_controllerName;
        }

        public function getModuleName()
        {
            return $this->_moduleName;
        }
        public function getFullControllerClass()
        {
            $strClass = $this->_moduleName . "_Controller_" . $this->_controllerName;
            $strClass = ucwords($strClass,'_');
            return $strClass;
        }

        public function getUrl($path)
        {
        return "http://localhost/Cybercom_PHP/mvcproject/".$path;
        }
    }
?>