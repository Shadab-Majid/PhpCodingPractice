<?php 

// trucate the string to n words.

function truncateString($string, $length, $ellipsis = '...') {
    if (strlen($string) <= $length) {
        return $string;
    }

    $truncatedString = substr($string, 0, $length);
    $lastSpace = strrpos($truncatedString, ' ');

    if ($lastSpace !== false) {
        $truncatedString = substr($truncatedString, 0, $lastSpace);
    }

    return $truncatedString . $ellipsis;
}

function truncateStringToN( string $str, int $len, $ellipsis = '...') {
    if(strlen($str) <= $len) {
        return $str;
    }
    $truncatedString = substr($str, 0, $len);
    $last_space = strrpos($truncatedString, ' ');
    if($last_space !== false) {
        $truncatedString = substr($truncatedString, 0, $last_space);
    }
    return $truncatedString; 
}

// Example usage
$text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
$truncatedText = truncateStringToN($text, 10);

echo $truncatedText; // Output: "Lorem ipsum dolor..."

function truncateWords(string $text, int $limit): string {
    $words = explode(' ', $text);
    if (count($words) <= $limit) return $text;
    return implode(' ', array_slice($words, 0, $limit)) . '...';
}

$str = 'shadab majid is a good boy';
// echo $trucated_str;
