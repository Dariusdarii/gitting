<?php
//Fibonacci series
$n = readline('Enter the value for N : ');
function Fibonacci($numb)
{
    if ($numb == 0)
        return 0;
    else if ($numb == 1)
        return 1;
    else
        return (Fibonacci($numb - 1) +
            Fibonacci($numb - 2));
}
echo 'The sequence is ';
for ($i = 0; $i < $n; $i++) {
    echo (Fibonacci($i). ' ');
}
