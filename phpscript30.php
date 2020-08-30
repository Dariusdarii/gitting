<?php
//number of arguments in a function
function sum($a,$b)
{
    $numargs = func_num_args();
    echo "Number of arguments: $numargs\n";
    return ($a + $b);
}

$s = sum(1, 2);  
echo "Sum of numbers is $s \n"; 
?>