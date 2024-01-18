<?php
//Exercise 5:Given the string `$quote = "In three words I can sum up everything I've learned about life: it goes on."`, perform the following operations:
    echo "<h1><b>Exersice 5</b></h1>"; 
    echo "<hr>";
    //1>Count the total number of words in the quote.
    $quote = "In three words I can sum up everything I've learned about life: it goes on.";
    echo str_word_count($quote)."<br>";
    //2>Convert the entire quote to lowercase.
    echo strtolower($quote)."<br>";
    //3>Capitalize the first letter of each word in the quote.
    echo ucwords($quote)."<br>";

?>