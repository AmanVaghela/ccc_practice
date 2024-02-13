<?php
class Core_Controller_Front
{
    public function init()
    {

        $request = Mage::getModel('core/request'); 
        $actionName = $request->getActionName();
        $action = $actionName . 'Action';
        // echo $action;
        $fullClassName = $request->getFullControllerClass();
        $controller = new $fullClassName();
        $controller->$action(); 

    }
}