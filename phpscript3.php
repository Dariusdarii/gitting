<?php
//Multiply with Addition operator
$number = readline('Enter the number : ');
$multiplier = readline('Enter the Multiplier : ');
$a = abs($number);
$b = abs($multiplier);
$mul = 0;
for ($i = 0; $i < $b; $i++) {
    $mul = $mul + $a;
}

if ($number < 0 xor $multiplier < 0) {
    $mul = - ($mul);
} else if ($number < 0 || $multiplier < 0) {
    $mul = ($mul);
}
echo ('Multiplied answer is :' . $mul);
