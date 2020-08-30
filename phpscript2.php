<?php
//circumference and area using diameter 
$dia = readline('Enter Diameter : ');
$rad = $dia/2;
$cir = 2 * pi() * $rad;
$are = pi() * ($rad * $rad);
echo ('Area :'. $are . 'sq.units'); 
echo (' Circumference : '.$cir. 'units');
?>