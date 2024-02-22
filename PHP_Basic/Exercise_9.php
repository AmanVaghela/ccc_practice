
<?php  
    //Write a PHP function to generate the Fibonacci sequence up to a specified number of terms
    /* Print fiboancci series upto 12 elements. */  
    /*
        Write a PHP function to generate the Fibonacci sequence up to a specified number of terms.
    */
    $number =13;
    function fibonacciSeries($number)
    {
        $a=0;
        $b=1;
        
        echo $a . " ";
        echo $b ." ";

        for($i=2;$i< $number;$i++)
        {
            $c = $a +$b;
            echo $c ." ";
            $a=$b;
            $b=$c;
            
        }
      
    }
    fibonacciSeries($number);

   
   ?> 
