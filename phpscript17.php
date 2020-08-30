<?php
//Compound Interest
$P	=readLine('Enter the initial principal amount : ');
$r	=readLine('Enter the interest rate : ');
$n	=readLine('Enter the number of times interest applied per time period : ');
$t	=readLine('Enter the number of time periods elapsed : ');

$R = $r/100;
$tothepower = ( $n * $t );
$by = ( $R / $n );
//echo $r , $t;
$ci = $P *(pow((1+ $by ), $tothepower));
echo ('The Compound interest for the data will be '.$ci);

?>