<?php
//delete an entry from an array
$n = readline('Enter the length of the array : ');
echo "Enter the array : ";
for ( $i = 0 ; $i < $n ; $i++)
{
$arr[$i] = readline();
}
print_r($arr);
$del = readline('Enter the number of input to be deleted : ');
unset($arr[$del]); //array_splice() also can be used
$arr = array_values($arr);
print_r($arr);