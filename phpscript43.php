<?php
//print New York date
$date = new DateTime();
$date->setTimezone(new DateTimeZone('America/New_York'));
$fdate = $date->format(' d / m / y ');
echo $fdate,"\n";