<?php
//(x+y+z)^N
$x = readline('value of x : ');
$y = readline('value of y : ');
$z = readline('value of z : ');
$N = readline('value of N : ');
$ans = ($x + $y + $z)**$N;
echo ('The '. $N .'th power of sum of '. $x . ', ' . $y . ' and ' . $z .' is '. $ans);
?>