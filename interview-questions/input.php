<?php

require 'functions.php';

$nums = 10;

$fibonacci_series = fibonacciSeries($nums);
// echo $fibonacci_series;

$colmn_and_row_num = 10;
$pattern = tringle($colmn_and_row_num);


$str = 'Shadab Majid';
$reverse_word = revervseStringByWord($str);
$reverse_word = reverseByWordString($str);
// echo $reverse_word;

$arr = [2,2,3,2,5,6];
$removeDuplicate = removeDuplicateFromArray($arr);
// print_r($removeDuplicate);
// var_dump(removeDuplicate($arr));
$square_even_idx_values  = squareTheEvenIdx($arr);

print_r($square_even_idx_values);

// $evenFollowedByOdd = evenFollowedByOdd($arr);
$nums = [2,7,11,15];
$target = 9;

twoSum($nums, $target);


// print_r($evenFollowedByOdd);