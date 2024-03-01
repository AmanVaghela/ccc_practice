<?php
    class Core_Block_Template extends Core_Block_Abstract
    {
        public $template;

        protected $_child = [];
        public function toHtml()
        {
            ob_start();
            ob_clean();
            $this->render();
            ob_end_flush();
        }

        public function addChild($key, $value)
        {
            $this->_child[$key] = $value;
            //_chield['header']= Page_Block_Header;
        }

        public function removeChild($key)
        {

        }

        public function getChild($key)
        {
            return $this->_child[$key];
        }

        // public function getChildHtml($key)
        // {
        //     return $this->_child[$key]->toHtml();
        // }

        public function getChildHtml($key)
        {
            $html='';
            if($key =='' && count($this->_child))
            {
                foreach($this->_child as $key => $_child)
                {
                    $html .= $_child->toHtml();
                }
            }
            else
            {
                $html = $this->_child[$key]->toHtml();
            }
            return $html;
        }
        public function setTemplate($template)
        {
              $this->template = $template;
              return $this;
            
        }

        public function getTemplate()
        {
            return $this->template;
        }

        public function getUrl($path)
        {
            return $this->getRequest()->getUrl($path);
        }
        
    }
?>