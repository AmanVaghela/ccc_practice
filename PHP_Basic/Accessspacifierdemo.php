<?php

  class abc
  {
    public $a=10;
    
   private $b=15;
   protected $c=10;
   // print_r ("$a");
 } 
   class xyz extends abc
   {
      public function test()
      {
        print_r($a);
      }
      public $a=20;
   }
    
   class pqr extends xyz
  {
  } 
  $obj1 = new  abc();
  $obj2 = new  xyz();
  $obj3 = new pqr();

  print_r($obj1->a);
  print_r($obj2->a);
  print_r($obj3->a);

  //$obj->$b;
?>