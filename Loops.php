<?php
//Loops:Certainly! Loops in PHP allow you to execute a block of code repeatedly. Here are examples of the three main types of loops: `for`, `while`, and `foreach`. You can use these examples for training:
//1>For Loop: The `for` loop is used when you know in advance how many times the loop should run.
/*   <?php

        // Example: Print numbers from 1 to 5 using a for loop
        for ($i = 1; $i <= 5; $i++) {
            echo $i . " ";
        }

        // Output: 1 2 3 4 5

        ?>

 */
echo "<hr>";
for ($i = 0; $i <= 10; $i++) {
    echo "The number is: $i <br>";
  }
  
echo"<br><hr>";
  //For loop with break statement.
  for ($i = 0; $i <= 10; $i++) {
    if ($i == 3) break;
    echo "The number is: $i <br>";
  }

echo"<br><hr>";
//For loop with continue statement.
for ($i = 0; $i <= 10; $i++) {
    if ($i == 3) continue;
    echo "The number is: $i <br>";
  }

  echo"<br><hr>";
  for ($x = 0; $x <= 100; $x+=10) {
    echo "The number is: $x <br>";
  }
  
  echo"<br><hr>";
  //2>While Loop:The `while` loop is used when you don't know in advance how many times the loop should run, and it continues as long as a specified condition is true.

   // Example: Print numbers from 1 to 5 using a while loop
   $i = 1;
   while ($i <= 5) {
       echo $i . " "."<br>";
       $i++;
   }
   echo "<br>";

   //While loop With break statement.
   $i = 1;
  while ($i < 6) {
  if ($i == 3) break;
  echo $i."<br>";
  $i++;
}

echo "<br>";
//while loop with continue satement

$i = 0;
while ($i < 6) {
  $i++;
  if ($i == 3) continue;
  echo $i."<br>";
}

echo "<br>";
//Do-While loop
$i = 1;

do {
  echo $i."<br>";
  $i++;
} while ($i < 6);

echo"<br><hr>";

//3>ForEach Loop:The `foreach` loop is specifically designed for iterating over arrays.
// Example: Iterate over an array and print each element
/* 
*/ 
$colors = array("Red", "Green", "Blue");
  foreach ($colors as $color) {
        echo $color . " "."<br>";
    }

    echo "<br>";
    
    class Car {
        public $color;
        public $model;
        public function __construct($color, $model) {
          $this->color = $color;
          $this->model = $model;
        }
      }
      
      $myCar = new Car("red", "Volvo");
      
      foreach ($myCar as $x => $y) {
        echo "$x: $y <br>";
      }
      
?>