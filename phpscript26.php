<?php
//get host name, OS, Ip address
$host = gethostname();
$ip = getHostByName($host);
echo "The Operating system is ", PHP_OS; //php_uname();
echo "\nThe name of the Host is ", gethostname();
echo "\nThe IP address is ", $ip ;

