<?php
//to remove Null, Empty and zero values in an array
$arr = array(1,2,3,3,"",null,'',0);
print_r(array_filter($arr));