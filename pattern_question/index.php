<?php

// require 'function.php';


// *****
// *****
// *****
// *****
// *****
// printStarInSquare(5);

// 1
// 12
// 123
// 1234
// 12345
// numberTriangle(5);

// *****
// ****
// ***
// **
// *
// reverseTriangle(5);

function printStarInSquare($num) {
    for($i = 0; $i < $num; $i++) {
        for($j = $i; $j < $num; $j++) {
            echo '*';
        }
        echo '\n';
    }
}

printStarInSquare(5);

function printTriangle($num) {
    for($i = 0; $i < $num; $i++) {
        for($j = 0; $j <= $i; $j++) {
            echo "*";
        }
        echo '<br>';
    }
}

printTriangle(5);

function printNumInTriangle($num) {
    for($i = 1; $i <= $num; $i++) {
        for($j = 1; $j <= $i; $j++) {
            echo $j;
        }
        echo '\n';
    }
}

printNumInTriangle(6);