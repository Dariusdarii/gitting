<?php
//swap without temporary variable
$a = readline('Enter the first number : ');
$b = readline('Enter the second number : ');

echo "The numbers before swapping are \n A = ",$a , ' and B = ', $b;
$a = $a + $b;
$b = $a - $b;
$a= $a - $b;
echo "\nThe numbers before swapping are \n A = ",$a , ' and B = ', $b;


