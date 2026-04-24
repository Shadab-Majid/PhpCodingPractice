<?php

// require 'function.php';


$arr = [2,3,46,5];
echo lastgestElmntInArray($arr);


//  echo secLgstInArray($arr);

 //dry run 

//  i = 2 , 45  45 > 2 && 45 > 3

//  second_largest = max(4) max = 45;

//  2nd operation: 

//  i = 3, value = 5 

//  5 > 3 && 5 > max(45)

$num = 1234;
// echo digitExtractin($num);

// echo reverseUsingExtraction($num);
// echo isArmstrong(372);


//writing function again to practice coding 

//without using inbuild function (asc)
function lastgestElmntInArray(array $arr) : string{
    $largest = $arr[0];
    for($i = 0; $i < count($arr); $i++) {
        if($arr[$i] > $largest) {
            $largest = $arr[$i];
        }
    }
    return $largest;
}

//using builtin function
function largstUsinInBuilt($arr) {
    sort($arr);
    return $arr[count($arr)-1];
}

largstUsinInBuilt($arr);


//second largest
$arr = [23,14,45,60];
function secLargest($arr) : string {
    $large = $arr[0];
    $secLarge = $arr[1];

    for($i = 2; $i < count($arr); $i++) {
        if($arr[$i] > $large) {
            $secLarge = $large;
            $large = $arr[$i];
        }elseif($arr[$i] > $secLarge) {
            $secLarge = $arr[$i];
        } 
    }
    return $secLarge;
}   

echo secLargest($arr);