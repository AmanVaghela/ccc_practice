<?php
//Prime Numbers:Write a PHP function to determine whether a given number is prime.
// PHP code to check whether a number is prime or Not
// function to check the number is Prime or Not
function primeCheck($number){
	if ($number <= 1)
    {
	return 0;
    }
    for ($i = 2; $i <= $number; $i++)
    {
		if ($number % $i == 0)
		{
        return 0;
        }
        else
    {
	return 1;
   }
    }
}
$number = 3;
$flag = primeCheck($number);
if ($flag == 1)
	echo " The number is Prime";
else
	echo "The number is Not Prime"



?>