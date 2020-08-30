<?php
//calendar of the month given
$month = readline('Enter the number of the month : ');
$year = readline('Enter the Year : ');
$count =cal_days_in_month ( CAL_GREGORIAN , $month , $year );

for ($i=1;$i<=$count;$i++)
{
    $arr[$i]=date('l', mktime(0,0,0,$month,$i,$year)).date(" $i/ $month / $year ");
}
print_r($arr);