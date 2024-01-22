<?php
//Switch Case:Certainly! The `switch` statement in PHP is used for efficient conditional operations where you have a single expression that you want to compare to multiple possible values. Here's an example of how to use the `switch` statement for training:
/* Explanation:
    - The `switch` statement evaluates the value of `$dayOfWeek`.
    - Each `case` checks whether it matches a specific day of the week.
    - The `break` statement terminates the `switch` statement once a match is found. If omitted, execution would continue to the next `case`.
    - The `default` case is executed if none of the specified cases match.
 */
/*

switch (expression) {
  case label1:
    //code block
    break;
  case label2:
    //code block;
    break;
  case label3:
    //code block
    break;
  default:
    //code block
}

 */
    // Sample variable to be evaluated
    $dayOfWeek = "Monday";

    // Using switch to check different cases
    switch ($dayOfWeek) {
        case "Monday":
            echo "It's the start of the week!"."<br>";
            break;

        case "Tuesday":
        case "Wednesday":
        case "Thursday":
            echo "It's a weekday."."<br>";
            break;

        case "Friday":
            echo "TGIF! It's Friday!"."<br>";
            break;

        case "Saturday":
        case "Sunday":
            echo "It's the weekend!"."<br>";
            break;

        default:
            echo "Invalid day of the week."."<br>";
    }

    $favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!"."<br>";
  case "blue":
    "Your favorite color is blue!"."<br>";
    break;
  case "green":
    echo "Your favorite color is green!"."<br>";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!"."<br>";
}


    

?>