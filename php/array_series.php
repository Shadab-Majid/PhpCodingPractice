<?php

$index_arr = [1,2,4,5,4];

$assoc_array = ["name" => "shadab", "age" => 25];

$mulitid_arr = [
    ["name" => "shadab", "age" => 25],
    [1,2,4,5,4],
    ["name" => "Shadab", "email" => "shadab@example.com"],
    ["name" => "Ali", "email" => "ali@example.com"],
    ["name" => "John", "email" => "john@example.com"]
];

// Accessing arrays 

//we can use index number to access array element in index array
// print_r($index_arr);
// echo $index_arr[0];

//we can use key to access array element in assoc array
// print_r($assoc_array);
// echo $assoc_array["name"];

//we have to follow the structure to acces multidimensional array 
// print_r($mulitid_arr);
// echo $mulitid_arr[3]["name"];

/**
 * looping in arrays.
 */

//We can simply use foreach in index array and use the array elements.

// foreach($index_arr as $index_item) {
//     echo $index_item . "\n";
// }


// we can use foreach and other array function and use assoc array key to add condition based on our requirements

// foreach($assoc_array as $key => $item) {
//     echo "$key : $item \n";
// }

// multidimentional array here nested loop will work.
// print_r($mulitid_arr);

// foreach($mulitid_arr as $individual_arr) {

//     if(is_array($individual_arr)) {
//         foreach($individual_arr as $item) {
//             echo $item;
//         }
//     }
//     print_r($individual_arr);cle
// }

/**
 * Adding items in array
 */
// print_r($mulitid_arr);
array_push($mulitid_arr, [
    "name" => "mustufa",
    "age" => 25,
]);


array_unshift($mulitid_arr, [1,2,3]);
array_shift($mulitid_arr);
var_dump($mulitid_arr);