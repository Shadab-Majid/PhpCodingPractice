<?php

//this file contains all the function related to different pattern

// print start in n sqare 

function printStarInSquare( int $n) {

    for($i = 1; $i <= $n; $i++) {
        for($j = 1; $j <= $n; $j++) {
            echo "*";
        }
        echo "\n";
    }
}

function numberTriangle($n) {

    for($i = 1; $i <= $n; $i++) {

        for($j = 1; $j <= $i; $j++) {
            echo $j;
        }
        echo "\n";
    }
}

function reverseTriangle($n) {
    for($i = $n; $i > 0; $i-- ) {
        for($j = 1; $j <= $i; $j++) {
            echo "*";
        }

        echo "\n";
    }
}