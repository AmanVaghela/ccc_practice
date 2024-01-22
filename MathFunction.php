<?php
//Math Functions
echo "<h1><b>Math Function</b></h1><hr>"."<br>";

//basic arithmatic Function
echo "<h2><b>Basic Arithmatic</b></h2>"."<br>";
//abs($number): Returns the absolute value of a number , provide some positive numbers.
$x=-57.90;
echo abs($x)."<br>";
$y=-50;
echo abs($y)."<br>";

//ceil($number): Rounds a number up to the nearest integer.
$x=37.7;
echo ceil($x)."<br>";
print(ceil(5.3))."<br>";
print(ceil(-5.3))."<br>";

// floor($number): Rounds a number down to the nearest integer.
$x=37.7;
echo ceil($x)."<br>";
print(floor(5.3))."<br>";
print(floor(-5.3))."<br>";

//round($number, $precision): Rounds a number to the nearest integer or specified number of decimal places.
$x=37.7;
echo round($x)."<br>";
print(round(5.7))."<br>";
print(round(-5.7))."<br>";

//Power Function
echo "<h2><b>Power Function</b></h2>"."<br>";
echo pow(3,2)."<br>";
echo pow(-2,4)."<br>";
echo pow(-3,-2)."<br>";
echo pow(-1,-7.5);

//sqrt($number): Returns the square root of a number.
echo sqrt(0)."<br>";
echo sqrt(4)."<br>";
echo sqrt(9)."<br>";
echo sqrt(0.64)."<br>";
echo sqrt(-9);

//Random Number Generation:This Function Working AS Generation some of random number in different time,means suffering a number randomly.
echo "<h2><b>Random Number Function</b></h2>"."<br>";
echo rand()."<br>";
echo rand(10,100);

//Number Formatting- `number_format($number, $decimals, $decimal_point, $thousands_separator)`: Formats a number with grouped thousands and a specified number of decimals.
echo "<h2><b> Number  Formatting Function</b></h2>"."<br>";
echo number_format("1000000")."<br>";
echo number_format("1000000",2)."<br>";
echo number_format("1000000",2,",",".");

?>