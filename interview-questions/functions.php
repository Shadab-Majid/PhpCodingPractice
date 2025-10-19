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


function revervseStringByWord($str) {
    $arr = explode(' ', $str);
    // for($i = count($arr)-1; $i >= 0; $i--) {
    //     $new_arr []= $arr[$i];
    // }
    // return implode(' ',$new_arr);

    // var_dump($arr);
    return implode(" ", array_reverse($arr));
    // var_dump($arr);
}

function removeDuplicate(array $arr) : array {

    $new_arr = [];
    foreach($arr as $item) {
        if(!in_array($item, $new_arr)) {
            $new_arr[] = $item;
            var_dump($new_arr);
        }else {
            continue;
        }
    }
    return $new_arr;
}



