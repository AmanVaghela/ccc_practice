<?php
    class Core_Controller_Front
    {
        public function init()
        {
            
            $request = new Core_Model_Request();
            $actionName = $request->getActionName().'Action';
            //echo $actionName;
            $fullClassName = $request->getFullControllerClass();    
            //echo $fullClassName;
            $controller = new $fullClassName();
            $controller->$actionName();
        }
    }
?>