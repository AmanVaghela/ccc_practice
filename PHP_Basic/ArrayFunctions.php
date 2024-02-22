<?php
/*
    1. Array Creation and Initialization:

        1. array() or []:
           - Creates a new array.
        2. array_merge($array1, $array2):
           - Merges two or more arrays.
        3. array_combine($keys, $values):
           - Creates an array by using one array for keys and another for its values.
        4. range($start, $end, $step):
           - Creates an array containing a range of elements.
*/
   echo "<b>Array Creation in different way</b><br><br>";
   // 1. array() or []:
   // Using array() constructor
    $array1 = array(1, 2, 3, 4, 5);

   // Using shorthand []
   $array2 = [6, 7, 8, 9, 10];

   echo "Array 1: ";
   print_r($array1);

   echo "<br>Array 2: ";
   print_r($array2);

   //2. array_merge($array1, $array2):
   $array3 = array('a' => 'apple','b'=>'banana');
   echo "<br>Array 3: ";
   print_r($array3);

   $mergedArray = array_merge($array1, $array3);

   echo "<br><br>Merged Array: ";
   print_r($mergedArray);

   // 3. array_combine($keys, $values):
   $keys = array('a', 'b', 'c');
   $values = array('apple', 'banana', 'cherry');

   // Combining arrays into an associative array
   $combinedArray = array_combine($keys, $values);

   echo "<br><br>Combined Array: ";
   print_r($combinedArray);

   // 4. range($start, $end, $step):
   $numberRange = range(1, 10, 2); // Start from 1, end at 10, with a step of 2

   echo "<br><br>Number Range: ";
   print_r($numberRange);
   echo "<br><br>";

/*
     2. Array Modification:

        5. array_push($array, $element) or $array[] = $element:
           - Adds one or more elements to the end of an array.
        6. array_pop($array):
           - Removes the last element from an array.
        7. array_unshift($array, $element):
           - Adds one or more elements to the beginning of an array.
        8. array_shift($array):
           - Removes the first element from an array.
        9. array_splice($array, $start, $length, $replacement):
           - Removes a portion of the array and replaces it with something else.
*/    

   echo "<b>Modification of array in different way</b><br><br>";

   // 5. array_push($array, $element) or $array[] 
   array_push($array1,6,7,8);
   echo "modification of array 1 after push operation:";
   print_r($array1);

   // 6. array_pop($array):
   array_pop($array2);
   echo "<br>array 2 after pop operation :";
   print_r($array2);

   //7. array_unshift($array, $element):
   array_unshift($array1,110);
   echo "<br>modification of array 1 after unshift operation :";
   print_r($array1);

   // 8. array_shift($array):
   array_shift($array1);
   echo "<br>modification of array 1 after shift operation :";
   print_r($array1);

   // 9. array_splice($array, $start, $length, $replacement):
   $array = [1, 2, 3, 4, 5];

   // Splicing the array to replace elements starting from index 1 with [6, 7, 8]
   array_splice($array, 1, 2, [6, 7, 8]);

   echo "<br>Array after splicing: ";
   print_r($array);

   echo "<br><br>";
/*
     3. Array Access:

        10. count($array):
            - Counts the number of elements in an array.
        11. sizeof($array):
            - Alias of count().
        12. array_key_exists($key, $array):
            - Checks if the given key or index exists in the array.
        13. array_keys($array):
            - Returns all the keys or a subset of the keys of an array.
        14. array_values($array):
            - Returns all the values of an array.
*/

   echo "<b>Access of array</b><br><br>";
    
   //10. count($array):
   echo "number of element in array1 : " . count($array1);
   echo "<br> number of element in array2 : " . count($array2);
   echo "<br> number of element in array3 : " . count($array3);
   echo "<br><br>";

   //11. sizeof($array):
   echo "sizeof array1 : " . sizeof($array1);
   echo "<br> sizeof array2 : " . sizeof($array2);
   echo "<br> sizeof array3 : " . sizeof($array3);
   echo "<br><br>";

   //12 .array_key_exists($key, $array):
   $associativeArray = array('name' => 'John','age' => 25,'city' => 'New York' );
   if (array_key_exists('age', $associativeArray))
      echo "The key 'age' exists in the array.\n";
   else
      echo "The key 'age' does not exist in the array.\n";
   echo "<br>";

   // 13. array_keys($array):
   $keys = array_keys($associativeArray);
      
   echo "Keys of the array: ";
   print_r($keys);
   echo "<br>";

   //14. array_values($array):
   $values = array_values($associativeArray);

   echo "Values of the array: ";
   print_r($values);
   echo "<br><br>";
  
/*
      4. Array Search:

        15. in_array($needle, $haystack):
            - Checks if a value exists in an array.
        16. array_search($needle, $haystack):
            - Searches an array for a given value and returns the corresponding key.
        17. array_reverse($array):
            - Returns an array with elements in reverse order.

*/
   echo "<b>Array search</b><br><br>";
   //15. in_array($needle, $haystack):
   $fruits = array('apple', 'banana', 'orange', 'grape');

   // Check if 'orange' exists in the array
   if (in_array('orange', $fruits))
      echo "The value 'orange' is present in the array.\n";
   else
      echo "The value 'orange' is not present in the array.\n";
   echo "<br>";

   // 16. array_search($needle, $haystack):
   $key = array_search('orange', $fruits);

   if ($key !== false)
      echo "The value 'orange' is found at key: $key\n";
   else
      echo "The value 'orange' is not found in the array.\n";
      echo "<br>";

   //17. array_reverse($array):
   $numbers = array(1, 2, 3, 4, 5);
   $reversedArray = array_reverse($numbers);

   echo "Original array: ";
   print_r($numbers);

   echo "<br>Reversed array: ";
   print_r($reversedArray);
   echo "<br><br>";

/*
      5. Array Sorting:

        18. sort($array):
            - Sorts an array.
        19. rsort($array):
            - Sorts an array in reverse order.
        20. asort($array):
            - Sorts an associative array by values.
        21. ksort($array):
            - Sorts an associative array by keys.
        22. arsort($array):
            - Sorts an associative array in reverse order by values.
        23. krsort($array):
            - Sorts an associative array in reverse order by keys.
*/
   echo "<b>Array sorting</b><br><br>";

   // 18. sort($array):
   $numbers = array(5, 2, 8, 1, 3);
   sort($numbers);  // Sort the array in ascending order

   echo "Sorted array (ascending order): ";
   print_r($numbers);
   echo "<br>";

   //19. rsort($array):
   rsort($numbers);  // Sort the array in descending order

   echo "Sorted array (descending order): ";
   print_r($numbers);
   echo "<br>";

   //20. asort($array):
   $ages = array('John' => 25, 'Alice' => 30, 'Bob' => 22);
   asort($ages);  // Sort the associative array by values in ascending order

   echo "Sorted associative array by values (ascending order): ";
   print_r($ages);
   echo "<br>";

   //21. ksort($array):
   ksort($ages);  // Sort the associative array by keys in ascending order

   echo "Sorted associative array by keys (ascending order): ";
   print_r($ages);
   echo "<br>";

   //22. arsort($array):
   arsort($ages);  // Sort the associative array by values in descending order

   echo "Sorted associative array by values (descending order): ";
   print_r($ages);
   echo "<br>";

   //23. krsort($array):
   krsort($ages);  // Sort the associative array by keys in descending order

   echo "Sorted associative array by keys (descending order): ";
   print_r($ages);
   echo "<br><br>";

/*
      6. Array Filtering:

        24. array_filter($array, $callback):
            - Filters elements of an array using a callback function.
        25. array_map($callback, $array):
            - Applies a callback function to each element of an array.
        26. array_reduce($array, $callback, $initial):
            - Iteratively reduces the array to a single value using a callback function.
*/
   echo "<b>Array filtering</b><br><br>";

   //24. array_filter($array, $callback):
   $numbers = [1, 2, 3, 4, 5, 6];
   $filteredNumbers = array_filter($numbers, function($num) {
      return $num % 2 == 0; // Keep only even numbers
   });
   print_r($filteredNumbers);
   echo "<br>";

   //25. array_map($callback, $array):
   $numbers = [1, 2, 3, 4, 5];
   $squaredNumbers = array_map(function($num) {
      return $num * $num; // Square each number
   }, $numbers);
   print_r($squaredNumbers);
   echo "<br>";

   //26. array_reduce($array, $callback, $initial):
   $numbers = [1, 2, 3, 4, 5];
   $sum = array_reduce($numbers, function($carry, $num) {
      return $carry + $num; // Calculate the sum
   }, 0);
   echo $sum;
   echo "<br><br>";

/*
    7. Array Slicing:

        27. array_slice($array, $offset, $length, $preserve_keys):
            - Extracts a portion of the array.
        28. array_splice($array, $offset, $length, $replacement):
            - Removes a portion of the array and replaces it with something else.
*/
   echo "<b>Array Slicing</b><br><br>";
   //27. array_slice($array, $offset, $length, $preserve_keys):
   $fruits = ['apple', 'banana', 'cherry', 'date', 'elderberry'];

   // Extract a slice starting from the third element, with a length of 2, and preserve keys
   $slice1 = array_slice($fruits, 2, 3, true);
   print_r($slice1);
   echo "<br>";

   // Extract a slice starting from the second element, with a length of 3, and preserve keys
   $slice2 = array_slice($fruits, 1, 3, false);
   print_r($slice2);

   //28. array_splice($array, $offset, $length, $replacement):
   $array = [1, 2, 3, 4, 5];

   // Splicing the array to replace elements starting from index 1 with [6, 7, 8]
   array_splice($array, 1, 2, [6, 7, 8]);

   echo "<br>Array after splicing: ";
   print_r($array);

?>