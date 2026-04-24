<?php

class Article {

    public $title;
    public $content;
    private $published = false;

    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
    }

    public function publish() {
        $this->published = true;
    }

    public function isPublished() {
        return $this->published;
    }
}

$article1 = new Article('Rich Dad', 'Book');
$article1->publish();
var_dump($article1);

$article2 = new Article('Last Hour', 'Book');
var_dump($article2);



class StringUtility {

    public static function shout($string) {
        return strtoupper($string).'!';
    }

    public static function whisper($string) {
        return strtolower($string).'-';
    }

    public static function repeat($string, int $times) {
        return str_repeat($string, $times);
    }
}


echo StringUtility::shout('shadab');
echo StringUtility::whisper('SHADAB');
echo StringUtility::repeat('SHADAB', 2);