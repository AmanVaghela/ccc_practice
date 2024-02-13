<?php
    class Core_Block_Template extends Core_Block_Abstract
    {
        public $template;
        protected $_chield=[];
        public function toHtml()
        {
            $this->render();
        }

        public function addChild($key, $value)
        {
            $this->_chield[$key]=$value;
            
        }

        public function removeChild($key)
        {

        }

        public function getChild($key)
        {
          return $this->_chield[$key];  
        }

        public function getChildHtml($key)
        {
          return $this->_chield[$key]->toHTML();  
        }
        public function setTemplate($template)
        {
           return $this->template=$template;

        }
        public function getTemplate()
        {
            return $this->template;
        }
    }
?>
