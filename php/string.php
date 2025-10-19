<?php

$text = "The quick brown fox jumps over the lazy dog.";
$word = "fox";

// find word in string 
if(strpos($text, $word)) {
    echo "$word found";
}

if(str_contains($text, $word)) {
    echo "$text contains -> $word";
}


?>

