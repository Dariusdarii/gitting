<?php
//no of repeated elements in array
$n = readline('Enter the length of the array : ');
echo "Enter the array : ";
for ( $i = 0 ; $i < $n ; $i++)
{
$arr[$i] = readline();
}
print_r(array_count_values($arr));
