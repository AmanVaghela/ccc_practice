<?php
//Factorial:Write a PHP function to calculate the factorial of a given number.
// /*Recursive function*/
function factorial($n)  
{  
  if($n <= 1) {  
    return 1;  
  }  
  else{  
    return $n * factorial($n - 1);  
  }  
}  
$n = 5;  
echo "Factorial of $n is " .factorial($n); /*Call the Function */ 
?>