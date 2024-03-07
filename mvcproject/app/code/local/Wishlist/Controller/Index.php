<?php
class Wishlist_Controller_Index extends Core_Controller_Front_Action
{
    
           public function saveAction()
        {
            $data = $this->getRequest()->getParams('wishlist');
            $customerModel = Mage::getModel('wishlist/wishlist');
            $customerModel->setData($data)->save();
            print_r($customerModel);
        }

        public function formAction()
        {
                $layout = $this->getLayout();
                $Wishlistform = $layout->createBlock('wishlist/form');
                $child = $layout->getChild('content');
                $child->addChild('wishlist', $Wishlistform);
                Mage::getSingleton('core/session')->set('session_id',3);
                $layout->toHtml();
        }

        public function listAction()
        {
           
            $layout = $this->getLayout();
            $child = $layout->getChild('content');
            $list = $layout->createBlock('wishlist/list');
            $child->addChild('list', $list);
            $layout->toHtml();
    
        }

       
        
    }

  
?>