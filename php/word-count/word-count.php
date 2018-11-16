<?php

function wordCount($string)
{
    $string = preg_replace('/[^a-z0-9]+/i', ' ', $string);
    $string = preg_replace('/[^a-z\d]+/i', ' ', $string);
    $string = strtolower($string);
    $words = explode(' ', trim($string));

    $wordCount = [];
    foreach ($words as $word) {
        if (!isset($wordCount[$word])) {
            $wordCount[$word] = 0;
        }
        $wordCount[$word]++;
    }

    return $wordCount;
}
