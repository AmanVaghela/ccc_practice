<?php
class Wishlist_Controller_Index extends Core_Controller_Front_Action
{
    // public function saveAction()
    // {
       
    //         // $data = $this->getRequest()->getParams('Wishlist');
    //         // $ = Mage::getModel("wishlist/wishlist"); 
    //         // $->setData($data)->save();
            
    //     }

        public function formAction()
        {
                $layout = $this->getLayout();
                $Wishlistform = $layout->createBlock('Wishlist/form');
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