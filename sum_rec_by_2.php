<?php
$arr = [1, 3, 2, 4, 1, 1, 5];

function sum_by_2($arr, $index=0){
    if($arr[$index] % 2 == 0) {
        $counted = $arr[$index];
    } else {
        $counted = 0;
    }
    if (count($arr) - 1 === $index) {
        return $counted;
    }
    return $counted + sum_by_2($arr, ++$index);
}

echo sum_by_2($arr);