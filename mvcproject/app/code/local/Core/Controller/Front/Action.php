<?php

class Core_Controller_Front_Action
{
    public function __construct()
    {
        $this->init();
    }

    public function init() {
        return $this;
    }
    protected $layout = null;
    public function getLayout()
    {
        if(is_null($this->layout))
        {
            $this->layout = Mage::getBlock("core/layout");
            // echo "From Action getLayout function";
        }
        return $this->layout;
    }
    public function getRequest()
    {
        return Mage::getModel('core/request');
    }
    public function setRedirect($url)
    {
        $url = Mage::getBaseUrl().$url;
        header("Location:". $url);
    }
}

?>