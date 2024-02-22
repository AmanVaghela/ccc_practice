<?php
//Exerice 3:Given the string `$sentence = "The quick brown fox jumps over the lazy dog"`, perform the following operations:
    echo "<h1><b>Exersice 3</b></h1>"; 
    echo "<hr>";
    $sentence = "The quick brown fox jumps over the lazy dog";
   //1>Find the position of the word "fox" in the sentence.
    echo strpos($sentence,"fox")."<br>";
    //2>Check if the word "cat" is present in the sentence.
    $string="cat";
    if(strpos($sentence,$string))
    {
        echo "cat having in sentence";
    }
    else
    {
        echo "Cat Not having in sentence";
    }
    echo "<br>";
    //3> Extract and print the first 20 characters of the sentence.
    echo substr($sentence,0,20);

  ?> 