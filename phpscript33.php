<?php
//print n+10 lines from the history.txt

//print_r(file("history.txt"));

$file = file("history.txt");
$n = readline('Enter the value of N : ');
for ( $i = ($n-1) ; $i < ($n+10) ; $i++)
{
    echo $file[$i]."\n";
}