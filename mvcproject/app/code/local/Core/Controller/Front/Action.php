<?php
    class Core_Controller_Front_Action
    {
        protected $_layout =null;
        public function getLayout()
        {
            if (is_null($this->_layout))
            {
                $this->_layout = Mage::getBlock("core/layout");
            }
        return $this->_layout;
        }

        public function getRequest()
        {
            return Mage::getModel("core/request");
        }
    }
?>
<!-- public function deleteAction()
     {
      //echo "catalog controller product delete";
      
      $productModel = Mage::getModel('catalog/product')->load($this->getRequest()->getParams('id',0));
      $productModel->delete();

      // header('Location: list');
     } -->