<?php
    class Mage
    {
        public static function init()
        {
            // $request_model_core = new Core_Model_Request();
            // echo $request_model_core->getRequestUri();
        //    $Requestmodel= Mage::getModel("core/request"); 
        //    echo(get_class($Requestmodel));
        Mage::getModel("core/request"); 
        }
        public static function getModel($ModelName)
        {
            $arr = explode("/", $ModelName);
           // $uc= array_map("ucfirst",$arr);
            $dif = ucfirst($arr[0])."_Model_".ucfirst($arr[1]);
            echo $dif;
        }
        public static function init()
        {

        }
        public static function getSingleton($className)
        {
            
        }
        public static function getModel($className)
        {

        }
        public static function register($key, $value)
        {

        }
        public static function registry($key)
        {

        }
        public static function getBaseDir($subDir = null)
        {
            
        }


    }
?>