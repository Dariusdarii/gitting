<?php
//Print a message if given key and value is present
$items = array("one" => "uno", "two" => "duo", "three" => "tre");

$key = readline('Enter the key to check if it exits : ');
if (array_key_exists($key, $items)) {
    echo $key, " is present.\n";
} else
    echo $key, " is not present.\n";

$value = readline("\nEnter the value to check if it exists : ");
foreach ($items as $x => $x_value) {
    if ($x_value == $value) {
        echo $x_value . "is present.\n";
    }
    else
    echo $value . " is not present.\n";exit;
}
