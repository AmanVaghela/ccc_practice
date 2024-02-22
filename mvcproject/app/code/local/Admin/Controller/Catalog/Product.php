 <?php
   class Admin_Controller_Catalog_Product extends Core_Controller_Front_Action
   {
     public function saveAction()
     {
         //$data = $this->getRequest()->getParam();
         echo"<pre>";
         
         //echo "123";
         $data=$this->getRequest()->getParams('pdata'); 
         print_r($data);
         $productModel = Mage::getModel('catalog/product');
         print_r($productModel);
        // $productModel->setData($data);
         $productModel->setData($data)->save();
         //print_r($productModel);
      // die;
     }

     public function deleteAction()
     {
      //echo "catalog controller product delete";
      
      $productModel = Mage::getModel('catalog/product')->load($this->getRequest()->getParams('id',0));
      $productModel->delete();

      // header('Location: list');
     }
     public function formAction()
     {
      //echo "<pre>";
      $layout = $this->getLayout();
      $layout->getChild('head')->addJs('js/page.js');
      $layout->getChild('head')->addJs('js/head.js');
      $layout->getChild('head')->addCss('css/page.css');
      $layout->getChild('head')->addCss('css/head.css');
      $child =$layout->getChild('content');
      $form = $layout->createBlock('core/template')->setTemplate('catalog/admin/product/form.phtml');
      $child->addChild('form',$form);
      //print_r($layout);

      $layout->toHtml();
     }

         
   } 
