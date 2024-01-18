
<?php
//This is a echo function use to print some of messages
 /*
echo "hello this is a echo function";
 echo"<br>";
 */
 //String Functions:-perform some operation on a string at that time we use the string functions
 
 //strlen($string): Returns the length of a string.
 /*
 $name = "aman";
 echo strlen($name);
 echo "<br>";
 echo "The length of my String name is=".strlen($name);
 echo "<br>";
*/
 //str_replace($search, $replace, $subject): Replaces all occurrences of a substring with another substring in a given string.
 /*
 $name = "Aman Gohel!";
 echo str_replace("Gohel", "Vaghela", $name);
 echo "<br>";
 echo str_word_count($name);
 echo "<br>";
*/
 //strpos($haystack, $needle): Finds the position of the first occurrence of a substring in a string.
 /*
 $mystring = "Hello PHP";
 echo strpos($mystring,"P");
 echo "<br>";
*/
 //substr($string, $start, $length): Returns a part of a string starting from the specified position and with a specified length.
 /*
 $name= "Aman Vaghela";
 echo substr($name,5);
 echo "<br>";
 echo substr($name,0,11)."<br>";
 echo substr($name,2,11)."<br>";
 echo substr($name,0,-1)."<br>";
 echo substr($name,3,-2)."<br>";
*/
 //strtolower($string): Converts a string to lowercase.
 /*
 $name= "Aman VAGHELA";
 echo strtolower($name)."<br>";
 echo strtolower("AmanVAGHELA")."<br>";
*/
 //strtoupper($string): Convert a string to uppercase.
 /*
 $name= "Aman VAGHELA";
 echo strtoupper($name)."<br>";
 echo strtoupper("aMANVaghela")."<br>";
*/
 //trim($string):Removes whitespace or other predefined characters from the beginning and end of a string.
 /*
 $str = "Hello Aman!";  
echo "Your string is: ".$str ."<br>"; 
echo trim($str,"H ")."<br>";   
echo trim($str,"He an!")."<br>";
*/
//implode($glue, $pieces): Joins array elements with a string.
/*
$arr = array('Hello','Aman!','Beautiful','Day!');
echo implode(" Good morning ",$arr)."<br>";
echo implode("+",$arr)."<br>";
echo implode("-",$arr)."<br>";
echo implode(" How are you ",$arr)."<br>";
*/
//explode($delimiter, $string): Splits a string into an array by a specified delimiter.

$str = 'one,two,three,four';
print_r(explode(",",$str))."<br>";

// zero limit
print_r(explode(' ',$str,0))."<br>";

// // positive limit
print_r(explode(',',$str,2))."<br>";

// // negative limit
 print_r(explode(',',$str,-1))."<br>";
 echo "<br>";

//htmlspecialchars($string): Converts special characters to HTML entities.
/*
$simplestr="This is simple <b>string</b>";
$str = "This is some <b>bold</b> text.";
$str1="<i>italic</i>";
echo htmlspecialchars($str)."<br>";
echo htmlspecialchars($str1)."<br>";
echo $simplestr."<br>";
*/
//htmlentities($string): Converts all applicable characters to HTML entities.
/*
$str = '<a href="https://www.cybercomcreation.com">CybercomCreation</a> <i>italic</i>';
echo ($str)."<br>";
echo htmlentities($str)."<br>";
*/
//str_repeat($string, $multiplier): Repeats a string a specified number of times.
/*
$str="aman";
echo str_repeat($str,5)."<br>";
*/
//strrev($string): Reverses a string.
/*
$str="aman";
echo strrev($str)."<br>";
*/
//str_shuffle($string): Randomly shuffles all characters in a string.
/*
echo str_shuffle("aman")."<br>";
*/
//str_split($string, $length): Converts a string to an array, breaking it into smaller chunks.
/*
print_r(str_split("Hello"));
print_r(str_split("Hello Aman",3));
echo "<br>";
*/
//str_word_count($string): Returns the number of words in a string.
/* 
$str="aman vaghela is here";
 echo str_word_count($str)."<br>";
*/
//substr_replace($string, $replacement, $start, $length): Replaces a portion of a string with another string.
/*
$string="aman";
 $string1="meet";
 echo substr_replace($string,$string1,2)."<br>";
 echo substr_replace($string,$string1,3)."<br>";
*/
//str_pad($string, $length, $pad_string, $pad_type): Pads a string to a certain length with another string.
/*
 $name = "Hello World";
 echo str_pad($name,20,"$%")."<br>";
*/
 //strcoll($string1, $string2): Locale based string comparison.
 /*
 $string1="aman";
 $string2="meet";
 echo strcoll($string1,$string2)."<br>";
*/
 //strcspn($string, $mask, $start, $length): Finds the length of the initial segment not matching a mask.
 /*
 $string1="aman vaghela is here";
 echo strcspn($string1,"n")."<br>";
 //echo strcspn($string1,"v",0,6)."<br>";
 */
 //stristr($haystack, $needle, $before_needle): Case-insensitive search for the first occurrence of a string.
 /*
 $str="Aman Vaghela is here";
 echo stristr($str,"vaghela");
 */
 
 //strrev($string):Reverses a string.
 /*
 $str="Aman Vaghela";
 echo strrev($str)."<br>";
*/
 //ucfirst($string): Converts the first character of a string to uppercase.
 /*
 $str="aMAN vAGHELA";
 echo ucfirst($str)."<br>";
*/
 //ucwords($string): Converts the first character of each word in a string to uppercase.
 /*
 $str="aman vaghela";
 echo ucwords($str);
 echo"<br><hr>";
*/
 ?>
 

