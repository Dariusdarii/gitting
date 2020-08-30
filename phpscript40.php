<?php
//add key and values in the start of the array
$items = array("one" => "uno", "two" => "duo", "three" => "tre");
$key = readline("\nEnter the Key to insert : ");
$value = readline('Enter the Value to be inserted into the key : ');
    $items = array($key => $value) + $items; //array_unshift() can be used but doesnot add custom key
    print_r($items);

//add key and values in the end of the array
$items = array("one" => "uno", "two" => "duo", "three" => "tre");
$value = readline('Enter the Value to be inserted into the key : ');
array_push($items,$value);

//$items =  $items + array($key => $value);

print_r($items);

