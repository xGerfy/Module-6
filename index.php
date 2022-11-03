<?php

$textStorage = [];

function add (&$textStorage, $title, $text) {
    $textStorage[] = ['title' => $title, 'text' => $text];
}

