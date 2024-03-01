<?php
    class Core_Controller_Front
    {
        public function init()
        {
            
            $request = Mage::getModel("core/request");
            $actionName = $request->getActionName().'Action';
            //echo $actionName;
            $fullClassName = $request->getFullControllerClass();    
            //echo $fullClassName;
            $controller = new $fullClassName();
            $controller->$actionName();
        }
    }
?>