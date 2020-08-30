<?php
//pascal triangle
$n = 10;
$arr = array();
function out($r, $p)
{
    global $arr;
    if (isset($arr[$r][$p])) {
        return $arr[$r][$p];
    }
    if ($r == 1 and $p == 1) {
        return 1;
    } else if ($p == 0) {
        return 0;
    } else if ($p > $r) {
        return 0;
    }
    return out($r - 1, $p - 1) + out($r - 1, $p);
}
for ($i = 0; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) { //2D Array
        echo $arr[$i][$j] = out($i, $j);
        if ($i != $j) {
            echo " ";
        }
    }
    echo "\n";
    for ($a = 0; $a < ($n - $i - 1); $a++) {
        echo "  ";
    }
}
