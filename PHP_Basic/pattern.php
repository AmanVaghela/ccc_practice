<?php
// $n=11;
// for($r=1;$r<=($n%2==0?($n/2):($n/2)+1);$r++){

//     for($s=1;$s<$r;$s++){
//         echo "&nbsp;&nbsp;&nbsp";
//     }
//     for($c=$r;$c<=($n-$r+1);$c++){
//         echo $c."&nbsp";
//     }
//     echo "<br>";
// }
// for($r=($n%2==0?(ceil($n/2)):(ceil($n/2)-1));$r>=1;$r--){

//     for($s=1;$s<$r;$s++){
//         echo "&nbsp;&nbsp;&nbsp";
//     }
//     for($c=$r;$c<=($n-$r+1);$c++){
//         echo $c."&nbsp";
//     }
//     echo "<br>";
// } 
$num = 5;
$px = 1; // left print control
$py = $num*2-1; // right print control

for ($i = 1; $i < $num; $i++)  // outer loop
{
    for ($j = 1; $j < $num*2; $j++)  // inner loop
    {
        if ($j >= $px && $j <= $py) {
            echo " $j ";
        } else {
            echo "&nbsp;&nbsp;&nbsp;"; // non-breaking space for HTML output
        }
    }
    $px++;
    $py--;
    echo "<br>";
}
$px = $num; // left print control
$py = $num; // right print control

for ($i = 1; $i <= $num; $i++)  // outer loop
{
    for ($j = 1; $j <$num * 2; $j++)  // inner loop
    {
        if ($j >= $px && $j <= $py) {
            echo " $j";
        } else {
            echo "&nbsp;&nbsp;&nbsp;"; // non-breaking space for HTML output
        }
    }
    $px--;
    $py++;
    echo "<br>";
}
?>