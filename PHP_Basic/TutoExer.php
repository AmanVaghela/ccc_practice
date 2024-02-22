<?php
// switch ($num) {
//     case 1:$num>3;
//     echo"123";
//     case 2:$num>4;
//     echo"4,5,6";
// }
$n=10;
for($i=1;$i<=$n;$i++)
{
    for($j=1;$j<=$n;$j++)
   {
   if($i<$n-$j+2)
   {
    echo $j;
   }  
}
   echo"<br>";
}
?>