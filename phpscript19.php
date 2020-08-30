<?php
//average of array elements
$n = readline('Enter the array length : ');
echo 'Enter the array values ',"\n";
$count = 0;
for ( $i = 1 ; $i <= $n ; $i++ )
{
    $arr[$i] = readline();
    $count = $count + $arr[$i]; 
}
echo ('The Average of all the entries is : '. $count/$n);