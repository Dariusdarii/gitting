<?php
//preg match to get src value
$str = '<img src="http://knackforge.com/sites/all/themes/knackforge/logo.png" alt="Home">';

preg_match( '@src="([^"]+)"@' , $str, $match );

print_r($match);
$arr =array_pop($match);
print_r($arr);