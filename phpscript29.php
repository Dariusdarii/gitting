<?php
//string is numeric or alphabetic letters
$string = readline('Enter any string : ');
if (ctype_alpha($string)) {
    echo "The string $string is an alphabetic string.\n";
} else if (ctype_digit($string)) {
    echo "The string $string is a numeric string.\n";
}
