<?php
//number divisible by 13 or not
$in = readline('Enter any number : ');
if( ($in % 13)==0){
    echo ($in . ' is divisible by 13.');
}
else 
echo ($in . ' is not divisible by 13.');
