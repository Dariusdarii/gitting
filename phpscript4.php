<?php
//Greatest among three numbers
$a = readline('Enter the first number: ');
$b = readline('Enter the second number: ');
$c = readline('Enter the third number: ');
if ($a>$b && $a>$c)
{
    echo ($a . ' is the greatest number.');
} else if($b>$a && $b>$c)
{
    echo ($b . ' is the greatest number.');
}else if ($c>$a && $c>$b)
{
    echo ($c . ' is the greatest number.');
}
?>