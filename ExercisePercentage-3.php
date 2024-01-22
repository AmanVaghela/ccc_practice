<?php
// Assuming $a is 10% higher than $b
$a = 110;  // Let's say $a is 110 (10% higher)
$b = ($a-100) / $a;  // Calculate $b

// Calculate how much lower $b is than $a
$difference = $b*100;

echo "\$a is 10% higher than \$b"."<br>";
echo "\$b is $difference lower than \$a.";
?>