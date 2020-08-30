<?php
//lcm and gcd of two numbers
$a = readline('Enter value A :');
$b = readline('Enter value B :');

function gcd($a, $b)
{
    if ($a == 0)
        return $b;
    if ($b == 0)
        return $a;
    if ($a == $b)
        return $a;
    if ($a > $b)
        return gcd($a - $b, $b);

    return gcd($a, $b - $a);
}

function lcm($a, $b)
{
    return ($a * $b) / gcd($a, $b);
}
echo "LCM of ", $a, " and ", $b," is ",lcm($a, $b);
