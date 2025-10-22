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


function square_even_idx_values($arr) {

    $n = count($arr);
    if($n === 1) {
        return false;
    }

    for($i = 0; $i < $n; $i++) {
        if($i % 2 == 0) {
            $arr[$i] = $arr[$i] * $arr[$i];
        }
    }
    return $arr;
}


//time complaxity = O(n)
// space complaxity = O(n)
function evenFollowedByOddUsingNewArray(array $arr) : array {
    
}


// function to show even array elements followed by odd numbers best approch
//time complaxity = O(n)
//space complaxity = O(1)

function evenFollowedByOdd(array $arr) : array {

    if(count($arr) === 1) {
        return false;
    }

    // double pointer approch
    $i = 0;
    $j = count($arr) - 1;
    echo $j;
    $temp = 0;
    while ($i < $j) {
        while($i < $j && $arr[$i] % 2 == 0) $i++;
        while($i < $j && $arr[$j] % 2 != 0) $j--;

        if($i < $j) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
            $i++;
            $j--;
        }

    }
    return $arr;
}


// Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.
//Input: nums = [2,7,11,15], target = 9
//Output: [0,1]
//Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].

function twoSum(array $nums, int $target) : array {
    print_r($nums);
    $output = [];
    foreach($nums as $key => $num) {
        $compliment = $target - $num;
        $compliment_idx = array_search($compliment, $nums);
        if($compliment_idx != false) {
            return $output[] = $compliment_idx;
        }
        $output[] = $key;
    }
}