<?php
//count the string length
$str = readline('Enter a string : ');
$strcount = strlen($str);
$length = 0;
echo ('The length of the string including the whitespaces and punctuations are ' . $strcount . "\n");
//preg_replace also can be used
for ($i = 0; $i < $strcount; $i++) {
    if ($str[$i] != ' ' and $str[$i] != '!' and $str[$i] != '?' and $str[$i] != ',' and $str[$i] != '.') {
        $length++;
    }
}
echo ('The length of the string excluding the whitespaces and punctuations are ' . $length . "\n");

