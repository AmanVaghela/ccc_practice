<?php
class Page_Controller_Index extends Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->getLayout()->toHtml();
    }
    
    public function saveAction()
    {
        echo "Save Data" ;
    }

}
?>