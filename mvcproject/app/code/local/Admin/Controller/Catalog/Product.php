 <?php
   class Admin_Controller_Catalog_Product extends Core_Controller_Front_Action
   {
     public function saveAction()
     {
         //$data = $this->getRequest()->getParam();
         echo"<pre>";
         
         //echo "123";
         $data=$this->getRequest()->getParams('pdata'); 
         //print_r($data);
         $productModel = Mage::getModel('catalog/product');//Catalog_Model_Product
         //print_r($productModel);
        // $productModel->setData($data);
         $productModel->setData($data)->save();
         print_r($productModel);
      // die;
     }

     public function deleteAction()
     {
      //echo "catalog controller product delete";
      
      Mage::getModel('catalog/product')
                ->load($this->getRequest()->getParams('id',0))
                ->delete();

     }
     public function formAction()
     {
      //echo "<pre>";
      $layout = $this->getLayout();
      //Core_Block_Layout
      $layout->getChild('head')->addJs('js/page.js');
      $layout->getChild('head')->addJs('js/head.js');
      $layout->getChild('head')->addCss('css/page.css');
      $layout->getChild('head')->addCss('css/head.css');
      $child =$layout->getChild('content');
      // $form = $layout->createBlock('core/template')->setTemplate('catalog/admin/product/form.phtml');
      $form = $layout->createBlock('catalog/admin_product_form');
     // Core_Block_Layout->createBlock('catalog/admin_product_form');
      $child->addChild('form',$form);
      //print_r($layout);

      $layout->toHtml();
     }

     public function listAction()
    {
        $layout = $this->getLayout();//Core_Block_Layout
        $layout->getChild('head')->addJs('js/page.js');
        $layout->getChild('head')->addJs('js/head.js');
        $layout->getChild('head')->addCss('css/page.css');
        $layout->getChild('head')->addCss('css/head.css');
        $child = $layout->getChild('content');

        $productForm = $layout->createBlock('catalog/admin_product_list')
            ->setTemplate('catalog/admin/product/list.phtml');
        $child->addChild('list', $productForm);


        $layout->toHtml();

    }

         
   } 
