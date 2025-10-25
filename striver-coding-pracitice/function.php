<?php

//largest element in an array.
function largestElement(array $arr) : int {

    $max = $arr[0];

    foreach($arr as $element) {
        if($element > $max) {
            $max = $element;
        }
    }
    return $max;
}

//second largest element

function secondLargest(array $arr) : int {

    $max = $arr[0];
    $second_largest = $arr[1];

    if($max < $second_largest) {
        $second_largest = $max;
        $max = $arr[1];
    }
    $n = count($arr);

    for($i = 2; $i < $n; $i++) {
        if($arr[$i] > $second_largest && $arr[$i] > $max) {
            $second_largest = $max;
            $max = $arr[$i];
        }
        elseif($arr[$i] > $second_largest && $arr[$i] < $max) {
            $second_largest = $arr[$i];
            // echo $second_largest;
        }
    }
    return $second_largest;
}
/**
 * Extracting digits function.
 */
//function extraction of digits.
function digitExtractin(int $num) : int {

    $counter = 0;
    while($num > 0) {
        $lst_digit = $num % 10; // it will the last 
        $counter += 1;
        $num = $num/10;
    }
    return $counter;
}

//revserse a number using digit extraction.
function reverseUsingExtraction($num) : int {
    $reverse_num = 0;
    while($num > 0) {
        $last_digit = $num % 10;
        $reverse_num = ($reverse_num * 10) + $last_digit;
        $num = intdiv($num, 10);
    }
    return $reverse_num;
}

//Armstrong function

function isArmstrong($num) {
    $temp_var = $num;
    $sum = 0;
    while ($temp_var > 0) {
        $digit = $temp_var % 10;
        $sum += ($digit * $digit * $digit);
        $temp_var = intdiv($temp_var, 10);
    }
    if($sum == $num) {
        return true;
    }else {
        return false;
    }
    // return $sum == $num ? true : false;
}
