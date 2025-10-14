<?php

function fibonacciSeries(int $nums) : array {
   $seires_arr = [0, 1];

    for($i = 2; $i < $nums; $i++) {
        $seires_arr[$i] = $seires_arr[$i-1] + $seires_arr[$i-2];
    }
    return $seires_arr;
} 


function tringle(int $colmn_and_rows_nums) {
    if(empty($colmn_and_rows_nums)) {
        return;
    }
    $nums = $colmn_and_rows_nums;
    for($i = 1; $i <= $nums; $i++) {
        for($j = 1; $j <= $i; $j++) {
            echo '*';
        }
        echo "\n";
        // echo ' ';
    }
}



