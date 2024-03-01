<?php
class Core_Model_Session
{
    public function __construct()
    {
        session_start();
    //    if(is_null($_SESSION))
    //    {
    //      session_start();
    //    }

    }
    // public function __destruct()
    // {

    // }
    public function get($key)
    {
        if(array_key_exists($key, $_SESSION))
        {
            return $_SESSION[$key];
        }
        return false;
       
    }
    public function set($key,$value)
    {  
        $_SESSION[$key]=$value;
        return $this;
    }
    public function getId()
    {
        if(!is_null($_SESSION))
        {
         return session_id();
        }
        return false;
    }
    public function remove($key)
    {
        if(isset($_SESSION[$key]))
        {
            unset($_SESSION[$key]);
            return true;
        } 
        return false;
    }


}
?>