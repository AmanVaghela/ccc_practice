<?php
// Arithmetic Operators:
echo "<h1><b>Arithmatic Operators</b></h1><hr>"."<br>";
/*
1. Addition:
- `$a + $b`
2. Subtraction:
   - `$a - $b`
3. Multiplication:
   - `$a * $b`
4. Division:
   - `$a / $b`
5. Modulus (Remainder):
   - `$a % $b`
6. Exponentiation:
   - `$a  $b` (PHP 5.6 and later)
*/

$x = 10;  
$y = 6;
echo $x + $y."<br>";
echo $x - $y."<br>"; 
echo($x * $y)."<br>"; 
echo($x / $y)."<br>"; 
echo($x ** $y)."<br>"; 
echo($x % $y)."<br>"; 
//echo($x  $y)."<br>"; 

//Aassignment Operators:
echo "<h1><b>Logical Operators</b></h1><hr>"."<br>";
/*
21. Logical AND:
    - `$a && $b`
22. Logical OR:
    - `$a || $b`
23. Logical NOT:
    - `!$a`

*/
 // 2. Assignment Operators:

 echo " Assignment Operators <br><br>";
 $number = 10;
 echo "The value of the variable is: $number <br>";
 
 echo "Addition assignment : ". $number +=5;
 echo "<br>Substraction assignment : ". $number -=5;
 echo "<br>Multiplication  assignment : ". $number *=5;
 echo "<br>Division assignment : ". $number /=5;
 echo "<br>Modulo assignment : ". $number %=4;
 echo "<br><br>";

 // 3. Comparison Operators:

 echo "Comparison Operators <br><br>";
 $number1 = 10;
 $number2 = 5;

 // Equal to
 $isEqual = $number1 == $number2;

 // Not equal to
 $isNotEqual = $number1 != $number2;

 // Identical (equal value and equal type)
 $isIdentical = $number1 === $number2;

 // Not identical
 $isNotIdentical = $number1 !== $number2;

 // Greater than
 $isGreater = $number1 > $number2;

 // Less than
 $isLess = $number1 < $number2;

 // Greater than or equal to
 $isGreaterOrEqual = $number1 >= $number2;

 // Less than or equal to
 $isLessOrEqual = $number1 <= $number2;

 echo "Number 1: $number1<br>";
 echo "Number 2: $number2<br>";
 echo "Equal to: " . ($isEqual ? 'true' : 'false') . "<br>";
 echo "Not equal to: " . ($isNotEqual ? 'true' : 'false') . "<br>";
 echo "Identical: " . ($isIdentical ? 'true' : 'false') ."<br>" ;
 echo "Not identical: " . ($isNotIdentical ? 'true' : 'false') ."<br>" ;
 echo "Greater than: " . ($isGreater ? 'true' : 'false') ."<br>" ;
 echo "Less than: " . ($isLess ? 'true' : 'false') ."<br>" ;
 echo "Greater than or equal to: " . ($isGreaterOrEqual ? 'true' : 'false') ."<br>" ;
 echo "Less than or equal to: " . ($isLessOrEqual ? 'true' : 'false') ."<br><br>" ;

 //  4. Logical Operators:

 echo "Logical Operators <br><br>";
 $boolean1 = true;
 $boolean2 = false;

 // Logical AND
 $andResult = $boolean1 && $boolean2;

 // Logical OR
 $orResult = $boolean1 || $boolean2;

 // Logical NOT
 $notResult1 = !$boolean1;
 $notResult2 = !$boolean2;

 echo "Boolean 1: " . ($boolean1 ? 'true' : 'false') . "<br>";
 echo "Boolean 2: " . ($boolean2 ? 'true' : 'false') . "<br>";
 echo "Logical AND: " . ($andResult ? 'true' : 'false') . "<br>";
 echo "Logical OR: " . ($orResult ? 'true' : 'false') . "<br>";
 echo "Logical NOT for Boolean 1: " . ($notResult1 ? 'true' : 'false') . "<br><br>";

 //5. Increment and Decrement Operators:

 echo "Increment and Decrement Operators <br><br>";
 $p = 5;

 // Pre-increment
 $preIncrement = ++$p;  // Increment $p first, then assign to $preIncrement

 // Post-increment
 $postIncrement = $p++; // Assign current value of $p to $postIncrement, then increment $a

 echo "Original value of \$p: 5<br>";
 echo "Pre-increment result: $preIncrement <br>";
 echo "Post-increment result: $postIncrement<br><br>";

 $q = 8;

 // Pre-decrement
 $preDecrement = --$q;  // Decrement $q first, then assign to $preDecrement

 // Post-decrement
 $postDecrement = $q--; // Assign current value of $q to $postDecrement, then decrement $b

 echo "Original value of \$q: 8 <br>";
 echo "Pre-decrement result: $preDecrement <br>";
 echo "Post-decrement result: $postDecrement <br><br>";

 //6. String Operators:

 echo "String Operators <br> <br>";

 $str1 = "Hello";
 $str2 = "World";

 $concatenatedString = $str1 . " " . $str2;
 echo "Concatenated string: $concatenatedString<br>";

 $str1 .= " " . $str2;  // Concatenate $str2 to $str1 and assign the result to $str1
 echo "Concatenated string: $str1 <br><br>";

 // 7. Conditional (Ternary) Operator:

 echo "Conditional (Ternary) Operator<br><br>";

 $isRaining = true;
 $message = $isRaining ? "Bring an umbrella" : "Enjoy the weather";
 echo "Weather message: $message";

?>

?>