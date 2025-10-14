<?php

//Array map function array_map(fn, $arr)



$arr = [1,2,3,4,5,6];

$new_arr = array_map('multiplyByTen', $arr);
// var_dump($new_arr);
function multiplyByTen($num) {
   return $num*10;
}

$new_arr_using_anonymous = array_map(function($num) {
    return $num * 10;
}, $arr);


// similar function in js 
/**
 * 
 * let arr = [1,2,3,4,5,6];
*let result = arr.map((el) => {
*   return el*10;
*})
*/

/**---------------------------------------------*/

//array_filter($arr, fn)

$filtered_array = array_filter($arr, function($num){
    return $num > 4;
});

// var_dump($filtered_array);


/** ---------------------------------------- */

//array_reduce function
$initial_val = 10;

$reduce_array = array_reduce($arr, function($acc, $item){
    // var_dump($acc);
    return $acc + $item;
}, $initial_val);

var_dump($reduce_array);







