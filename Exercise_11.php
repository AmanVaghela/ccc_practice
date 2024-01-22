<?php
//Exercise 11: Bubble Sort:-Implement the Bubble Sort algorithm to sort an array. (Do not use array sort function)
    //$arrayToSort = [64, 34, 25, 12, 22, 11, 90];

$arrayToSort=[64, 34, 25, 12, 22, 11, 90];
$temp=0;
echo "Before Sort";
print_r($arrayToSort);
for($i=0;$i<count($arrayToSort);$i++)
{
    for($j=0;$j<count($arrayToSort)-1;$j++)
    {
        if($arrayToSort[$j]>$arrayToSort[$j+1])
        {
            $temp=$arrayToSort[$j];
            $arrayToSort[$j]=$arrayToSort[$j+1];
            $arrayToSort[$j+1]=$temp;
        }
    }
}
echo "After Sort the array";
print_r($arrayToSort)."<br>";
?>