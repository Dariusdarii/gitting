<?php
//factorial without multiplication
$fac = readline('Enter the number : ');
function fact($n)
{
    if ($n <= 1) {
        return 1;
    } else {
        $f = 0;
        for ($i = 0; $i < $n; $i++) {
            $f = $f + fact($n - 1);
        }
        return $f;
    }
}

echo "Factorial of " . $fac . " is " . fact($fac);
