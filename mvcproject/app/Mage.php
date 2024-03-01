<?php
    class Mage
    {
       public static $registry=[];
        private static  $baseDir  = "C:/xampp/htdocs/Cybercom_PHP/mvcproject/";
        private static $singleton= [];
        public static function init()
        {   
        //     $name = Mage::getModel("core/request");
        //    // $request_model_core = new Core_Model_Request();
        //    //$request_model_core->getRequestUri();
        //     echo get_class($name);/
                $frontController = new Core_Controller_Front();
                $frontController->init();
        }

        public static function getSingleton($className) 
        { 
            if(isset(self::$singleton[$className]))
            {
              return self::$singleton[$className];
            }
              return self::$singleton[$className]= self::getModel($className);
        }

        public static function getModel($modelname)
        {
            $model = explode('/',$modelname);
            $modelObj = ucfirst($model[0])."_Model_". ucfirst($model[1]);
            // $array = explode('/',$className);
            // $fullName = ucfirst($array[0])."_Model_". ucfirst($array[1]);
           // $a = array_map('ucfirst',$array);
           // $fullName = $a[0]."_Model_".$a[1];

          return new $modelObj;

        }
        
        public static function getBlock($className)
        {
            $array = explode('/',$className);
            $fullName = ucfirst($array[0])."_Block_". ucfirst($array[1]);
           // $a = array_map('ucfirst',$array);
           // $fullName = $a[0]."_Model_".$a[1];

            return new $fullName();

        }

        public static function register($key, $value)
        {

        }

        public static function registry($key)
        {

        }

        public static function getBaseDir($subDir = null)
        {
            if($subDir)
            {
                return self::$baseDir . '/' . $subDir;
                       
            }
            return  self::$baseDir; 
        }
        public static function setBaseUrl()
        {
            return "http://localhost/Cybercom_PHP/mvcproject/";
        }
    public static function getBaseUrl()
        {
            return "http://localhost/Cybercom_PHP/mvcproject/";
        }
    
    }
?>