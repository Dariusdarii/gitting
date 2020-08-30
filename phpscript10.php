<?php
//smallest and greatest of aray elements
$n = readline('Enter the array length :');
for ($i = 0; $i < $n; $i++) {
    $arr[$i] = readline();
}
$small = $large = $arr[0];
for ($i = 0; $i < $n; $i++) {
    if ($arr[$i] > $large) {
        $large = $arr[$i];
    }
    if ($arr[$i] < $small) {
        $small = $arr[$i];
    }
}
echo ('The largest number is ' . $large . "\n" . 'The smallest number is ' . $small);
