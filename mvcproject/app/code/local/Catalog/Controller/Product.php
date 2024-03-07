<?php
   class Catalog_Controller_Product extends Core_Controller_Front_Action
   {
    public function viewAction(){
      //product details,quantity box & addToCart Button except cost
      $layout=$this->getLayout();
      // $layout->getChild("head")->addCss('../../skin/css/header.css');
      // $layout->getChild("head")->addCss('../../skin/css/footer.css');
      
      $child= $layout->getChild("content");

      $view=$layout->createBlock("catalog/admin_product")
                      ->setTemplate("catalog/admin/product/view.phtml");
      $child->addChild("view",$view);
      
      $layout->toHtml();
  }
    //  public function saveAction()
    //  {
    //      //$data = $this->getRequest()->getParam();
    //      echo"<pre>";
         
    //      //echo "123";
    //      $data=$this->getRequest()->getParams('pdata'); 
    //      print_r($data);
    //      $productModel = Mage::getModel('catalog/product');
    //      print_r($productModel);
    //     // $productModel->setData($data);
    //      $productModel->setData($data)->save();
    //      //print_r($productModel);
    //   // die;
    //  }
  //    public function formAction()
  //    {
  //     //echo "<pre>";
  //     $layout = $this->getLayout();
  //     $layout->getChild('head')->addJs('js/page.js');
  //     $layout->getChild('head')->addJs('js/head.js');
  //     $layout->getChild('head')->addCss('css/page.css');
  //     $layout->getChild('head')->addCss('css/head.css');
  //     $child =$layout->getChild('content');
  //     $form = $layout->createBlock('core/template')->setTemplate('product/form.phtml');
  //     $child->addChild('form',$form);
  //     //print_r($layout);

  //     $layout->toHtml();
  //    }

         
   }
