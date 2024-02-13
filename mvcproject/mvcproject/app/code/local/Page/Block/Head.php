<?php
    class Page_Block_Head extends Core_Block_Template
    {
        protected $_css=[];
        protected $_js=[];

        public function __construct()
        {
            $this->setTemplate('page/header.phtml');
        }
        public function addJs($file)
        {
            $this->_js[]=$file;
        }
        public function addCss($file)
        {
            $this->_css[]=$file;
        }
    }
  
?>