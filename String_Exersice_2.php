<?php
//Exercise 2:Display Given the string `$text = "Hello, World! How are you doing?"`, perform the following operations:
    echo "<h1><b>Exersice 2</b></h1>"; 
    echo "<hr>";
   //1> Find the length of string.
    $text = "Hello, World! How are you doing?";
    echo "The Length of string is=".strlen($text)."<br>";
    //2>Convert the entire string to lowercase.
    echo strtolower($text)."<br>";
    //3>Convert the entire string to uppercase.
    echo strtoupper($text)."<br>";
   //4> Replace "How are you doing?" with "Fine, thank you!".
    echo str_replace($text,"How are you doing?","Fine, thank you!")."<br>";
   //5>Extract and print the first 10 characters of the string.
   echo substr($text,0,11)."<br>";
   //6>Extract and print the substring starting from the 8th character to the end.
   echo substr($text,8)."<br>"."<hr>";
   ?>