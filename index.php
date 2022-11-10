<?php

$textStorage = [];

function add (&$textStorage, $title, $text) {
    $textStorage[] = ['title' => $title, 'text' => $text];
}

add($textStorage, 'hello', 'world');
add($textStorage, 'привет', 'мир');

function remove (&$textStorage, $a) {
    foreach ($textStorage as $key => $value) {
        if ($a == $key || $a == $value) {
            unset($textStorage[$a]);
            return true;
        }
        return false;
    }
}

var_dump(remove($textStorage, 0));
var_dump(remove($textStorage, 5));

function edit (array &$textStorage, int $a, string $newTitle, string $newText) {
    foreach ($textStorage as $key => $value) {
        if ($a == $key || $a == $value) {
            $textStorage[$a]['title'] = $newTitle;
            $textStorage[$a]['text'] = $newText;
            return true;
        }
        return false;
    }
}

var_dump(edit($textStorage, 1, 'new title', 'new text'));
var_dump(edit($textStorage, 5, 'new title', 'new text'));