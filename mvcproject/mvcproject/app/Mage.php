<?php
class Mage
{
    private static $registry = [];
    private static $baseDir = "C:/xampp/htdocs/Cybercom_PHP/mvcproject/mvcproject";
    public static function init()
    {
        // $request_model_core = new Core_Model_Request();
        // echo $request_model_core->getRequestUri();
        // $name = Mage::getModel("core/request");
        // echo get_class($name);
        $frontController = new Core_Controller_Front();
        $frontController ->init(); 
    }
    public static function getModel($modelName)
    {
        $a = explode("/", $modelName);
        $arr = ucfirst($a[0]) . "_Model_" . ucfirst($a[1]);
        return new $arr();
    }

    public static function getBlock($BlockName)
    {
        $a = explode("/", $BlockName);
        $arr = ucfirst($a[0]) . "_Block_" . ucfirst($a[1]);
        return new $arr();
    }
    public static function getSingleton($className)
    {

    }
    public static function register($key, $value)
    {
        self::$registry[$key] = $value;
    }

    public static function registry($key)
    {
        return isset(self::$registry[$key])?self::$registry[$key]:null;
    }

    public static function getBaseDir($subDir = null)
    {
        if($subDir)
        {
            return self::$baseDir ."/". $subDir;
        }
        return self::$baseDir;
    }
}


