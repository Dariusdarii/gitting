<?php
//display number of days in the month
$yr = readline('Enter the Year : ');
$mon = readline('Enter the Month in number : ');
$n = cal_days_in_month(CAL_GREGORIAN, $mon , $yr);

echo "There are $n days in the $mon th of $yr. ";
