<?php
//remove duplicate values from array 
$n = readline('Enter the Array length : ');
echo "Enter the array : ";
for ( $i = 0 ; $i < $n ; $i++)
{
$arr[$i] = readline();
}
$a = array_unique($arr);
echo "The array without duplicate elements \n";
print_r( array_unique($arr));
