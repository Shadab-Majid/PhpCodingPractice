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