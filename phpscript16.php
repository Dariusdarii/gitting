<?php
//Amstrong number
function arm($num){
$x = $n = $num;
$total = 0;
//echo strlen($num);
while( $x > 0)
{   
    $li = strlen($x);
    $reminder = $x % 10;
    $total = $total + pow($reminder, $li);
    $x = $x /10;
if ($n == $total)
    return $n."\n";
}
}
$arr = range(99,9999);
echo 'The Amstrong numbers between 99 and 9999 are ',"\n";
foreach($arr as $y){
    //echo $y,"\n"; 
    echo arm($y);
}