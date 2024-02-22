<?php
// Write a PHP program that prints the numbers from 1 to 100. For multiples of three, print "Fizz" instead of the number, and for multiples of five, print "Buzz". For numbers that are multiples of both three and five, print "FizzBuzz".
 $num=1;
// for($i=1;$i<=$num;$i++)
// {
//   if($i % 3 == 0 && $i % 5 == 0){

//     echo "FizzBuzz"."<br>";
    
//   }
//   elseif($i % 5 == 0){
//     echo "Buzz"."<br>";
//   }
//   elseif($i%3==0){
//     echo "Fizz"."<br>";
//   }else{
//     echo $i."<br>";
//   }
// }

while($num<=100)
{
    if($num % 3 == 0 && $num % 5 == 0){

            echo "FizzBuzz"."<br>";
            $num++;
          }
          elseif($num % 5 == 0){
            echo "Buzz"."<br>";
            $num++;
          }
          elseif($num%3==0){
            echo "Fizz"."<br>";
            $num++;
          }else{
            echo $num."<br>";
            $num++;
          }

}
?>