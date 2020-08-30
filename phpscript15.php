<?php
//sum of N numbers
$n = readline('Enter the number N : ');
// $count = 0;
// for ( $i = 1 ; $i <= $n ; $i++ )
// {
//     // $arr[$i] = $i;
//     $count = $count + $i;
//     // echo $arr[$i];
// }
// echo ('The sum of '. $n . ' numbers is '.$count);

echo 'Enter the array values ',"\n";
$count = 0;
for ( $i = 1 ; $i <= $n ; $i++ )
{
    $arr[$i] = readline();
    $count = $count + $arr[$i]; 
}
echo ('The sum of the array elements is '.$count);

