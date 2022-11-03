<?php

$textStorage = [];

function add (&$textStorage, $title, $text) {
    $textStorage[] = ['title' => $title, 'text' => $text];
}

add($textStorage, 'hello', 'world');
add($textStorage, 'привет', 'мир');
var_dump($textStorage);

function remove (&$textStorage, $a) {
    foreach ($textStorage as $key => $value) {
        if ($a == $key || $a == $value) {
            unset($textStorage[$a]);
        }
    }
}

remove($textStorage, 0);
remove($textStorage, 5);
var_dump($textStorage);