<?php
 //Statements
 //1>If Statement:The `if` statement is used to execute a block of code if a specified condition is true.
 /*
  <?php
    $condition = true;

    if ($condition) {
        // Code to be executed if the condition is true
        echo "Condition is true.";
    }
     // Rest of the code
    ?>
*/
$num = 14;
if ($num < 20) {
  echo "Num less then 20!"."<br>";
}
if ($num == 14) {
    echo "Num is equals to 14!"."<br>";
  }
  if ($num > 14) {
    echo "Num is greter then 14!"."<br>";
  }
  if ($num <> 14) {
    echo "Num is not equal to 14!"."<br>";
  }
  if ($num <= 14) {
    echo "Num lessthen or equals to 14!"."<br>";
  }
  if ($num >= 14) {
    echo "Number greter then or equals to 14!"."<br>";
  }

  //2>If-Else Statement:The `if-else` statement allows you to execute one block of code if a condition is true and another block if the condition is false.
  /*
  <?php
    $condition = false;

    if ($condition) {
        // Code to be executed if the condition is true
        echo "Condition is true.";
    } else {
        // Code to be executed if the condition is false
        echo "Condition is false.";
    }

    // Rest of the code
    ?>
*/

$num=12;  
if($num%2==0){  
echo "$num is even number"."<br>";  
}else{  
echo "$num is odd number"."<br>";  
}  

$number=34;
if($number>33)
{
echo "Congratulations You have pass the examination"."<br>";
}
else
{
    echo"Sorry You have not clear the examination"."<br>";
}


//3>If-Elseif-Else Statement:The `if-elseif-else` statement allows you to check multiple conditions in sequence.
/*    <?php
    $number = 10;

    if ($number > 0) {
        echo "Number is positive.";
    } elseif ($number < 0) {
        echo "Number is negative.";
    } else {
        echo "Number is zero.";
    }

    // Rest of the code
    ?>
 */
    $marks=69;      
    if ($marks<33){    
        echo "fail"."<br>";    
    }    
    else if ($marks>=34 && $marks<50) {    
        echo "D grade"."<br>";    
    }    
    else if ($marks>=50 && $marks<65) {    
       echo "C grade"."<br>";   
    }    
    else if ($marks>=65 && $marks<80) {    
        echo "B grade"."<br>";   
    }    
    else if ($marks>=80 && $marks<90) {    
        echo "A grade"."<br>";    
    }  
    else if ($marks>=90 && $marks<100) {    
        echo "A+ grade"."<br>";   
    }  
   else {    
        echo "Invalid input"."<br>";    
    }  
    
//4>Nested If Statements:You can also nest `if` statements inside each other to create more complex conditional logic.
/* <?php
    $condition1 = true;
    $condition2 = false;

    if ($condition1) {
        if ($condition2) {
            // Code to be executed if both conditions are true
            echo "Both conditions are true.";
        } else {
            // Code to be executed if only the first condition is true
            echo "Only the first condition is true.";
        }
    } else {
        // Code to be executed if the first condition is false
        echo "The first condition is false.";
    }

    // Rest of the code
    ?>
 */
$num = 13;
if ($num > 10) {
  echo "Above 10";
  if ($num > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}




?>