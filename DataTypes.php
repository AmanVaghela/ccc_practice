<?php
  //Data types:
  echo "<h1><b>Data Types</b></h1><hr>";
  // 1>Integer-Represents whole numbers without a decimal point.
  $integerVar = 42;
  var_dump($integerVar);
  echo "<br>";
  $integerVar1 = 1050;
  echo var_dump($integerVar1)."<br>";
  echo var_dump(is_int($integerVar1));
  echo "<br>";

  //2> Float - Represents numbers with a decimal point.
   $floatVar = 3.14;
   var_dump($floatVar);
   echo "<br>";
   $floatVar1 = 1050.34;
   echo var_dump($integerVar1)."<br>";
   echo var_dump(is_float($floatVar1));
   echo "<br>";

   //3>String- Represents a sequence of characters.
   $stringVar = "Hello, PHP!";
   echo var_dump($stringVar);
   echo "<br>";
   $stringVar1 ="Aman Vaghela";
   echo var_dump($stringVar1);
   echo "<br>";

   //4> Boolean- Represents either `true` or `false`.
    $boolVar = false;
    echo var_dump($boolVar)."<br>";
    echo var_dump(is_bool($boolVar));
    echo "<br>";
    $boolVar1 = true;
    echo var_dump($boolVar1);
    echo "<br>";

    //5>Array- Represents an ordered map that can hold multiple values.
    //Normal index array:
    $arrayVar = array(1, 2, 3, "PHP");
    echo var_dump($arrayVar);
    echo "<br>";
    $arrayVar1 = array(1,true,3.5, "PHP");
    echo var_dump($arrayVar1);
    echo "<br>";

    //with list index
    $myArr = array("Volvo", 15, ["apples", "bananas"], 4.5);
    echo var_dump($myArr[2]);
    echo "<br>";
    
    //Associative array:
    $Employee = array("Name"=>"Aman","Salary"=>10000,"age"=>21,"Experience"=>3.5,"Division"=>"D");
    echo var_dump($Employee);
    echo "<br>";
    echo var_dump($Employee["Name"])."<br>";
    echo var_dump($Employee["Salary"])."<br>";

    //Multi Dimentional array:
    $Employee = array(array("Name"=>"Aman"),array("Salary"=>10000),array("age"=>21,"Experience"=>3.5,"Division"=>"D"));
    echo var_dump($Employee)."<br>";
    echo var_dump($Employee[2]);
    echo "<br>";

    //6> NULL- Represents the absence of a value or a variable without a value.
    $nullVar = NULL;
    echo var_dump($nullVar);
    echo "<br>";

?>