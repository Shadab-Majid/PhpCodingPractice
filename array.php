<?php
// Online PHP compiler to run PHP program online
// Print "Try programiz.pro" message
// echo "Try programiz.pro";


function strreverse(string $str): string{
    $reversed = '';
    $len = strlen($str);
    for($i = $len-1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }
    return $reversed;
}


// function isPalindrome(string $str) :string {
//     $reverse_str= strreverse($str);
    
//     $ans = ($reverse_str === $str) ?  'palindrome':  'not palindrom';
    
//     return $ans;
// }

// function isPalindrome(string $str): bool {
//     $str = strtolower(preg_replace('/[^a-z0-9]/', '', $str));
//     return $str === strrev($str);
// }


function isPalindrome(string $str) {
    $str = strtolower(preg_replace('/[^a-z0-9]/', '',$str));
    return $str === strrev($str);
}

$string = '121';
$is_palindrom = isPalindrome($string);
// echo ($is_palindrom) ? 'palindrome': 'not-palindrome';
$reversed_string = strreverse($string);
// echo $reversed_string;



//duplicate number in array

function findDuplicate($arr) {
   $unique_array = [];
   foreach($arr as $item){
    if(!in_array($item, $unique_array)) {
        $unique_array[] = $item;
    }
   }
   return $unique_array;
}


$arr = [1,2,4,5,4,3,2,3];
$remove_duplicate = findDuplicate($arr);
// var_dump($remove_duplicate);


function factorialOfNumber(int $num) : int {
    $factorial = $num;
    for($i = $num-1; $i > 0; $i--) {
        $factorial *= $i;
    }
    // print_r($factorial);
    return $factorial;
}
$num = 5;
$factorial_of_num = factorialOfNumber($num);
// echo $factorial_of_num;



// second highest number in array.

$arr = [1,2,34,5,6,44];

function secondHighest(array $arr) : int{

    sort($arr);
    $len = count($arr);
    echo $len;
    var_dump($arr);
    for($i = $len-1; $i >= 0; $i--) {
        if($arr[$i] == $arr[$i-1]) {
            continue;
        }else {
            return $second_largest = $arr[$i-1];
        }
    }
}
$second_largest = secondHighest($arr);
// echo $second_largest;


//get array length 

$arr = [1,3,4,5,3];

function getArryaLen(array $arr) {
    if(empty($arr)) {
        return;
    }
    for($i = 0; )
}
?>