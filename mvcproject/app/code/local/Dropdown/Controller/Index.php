<?php
class Dropdown_Controller_Index extends Core_Controller_Front_Action
{
    
           public function saveAction()
        {
            $data = $this->getRequest()->getParams('dropdown');
            
            // $dropdownModel = Mage::getModel('dropdown/landlord');
            // $dropdownModel->setData($data)->save();
            // print_r($dropdownModel);
            $this->setRedirect("dropdown/index/form?Id=".$data);
        }

        public function formAction()
        {
                $layout = $this->getLayout();
                $Dropdownform = $layout->createBlock('dropdown/form');
                $child = $layout->getChild('content');
                $child->addChild('dropdown', $Dropdownform);
               // Mage::getSingleton('core/session')->set('session_id',3);
                $layout->toHtml();
        }

      

       
        
    }

  
?>