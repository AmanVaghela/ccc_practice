<?php
 echo "<h1><b>Exersice 4</b></h1>"; 
 echo "<hr>";
 //Exersice 4:Given the string `$name = "John"`, perform the following operations.
 //1>Pad the string with underscores (`_`) on the left side to make its total length 10 characters.
 $name = "John";
 echo str_pad($name,10,"_",STR_PAD_LEFT)."<br>";
 //2>Pad the string with asterisks (`*`) on the right side to make its total length 8 characters.
 echo str_pad($name,8,"*",STR_PAD_RIGHT)."<br>";
 //3>Print the resulting strings.
 echo str_pad($name,14,"*",STR_PAD_BOTH)."<br>";
 echo($name);
?>