<?php

function encode($input)
{
    $previous = '';
    $count = 0;
    $output = '';

    foreach (str_split($input) as $inputCharacter) {
        if ($inputCharacter !== $previous) {
            if ($count >  1) {
                $output .= $count;
            }
            $output .= $previous;
            $count = 1;
        } else {
            $count++;
        }
        $previous = $inputCharacter;
    }

    if ($count >  1) {
        $output .= $count;
    }
    $output .= $previous;

    return $output;
}

function decode($input)
{
    $count = '';
    $output = '';

    foreach (str_split($input) as $inputCharacter) {
        if (intval($inputCharacter)) {
            $count .= $inputCharacter;
        } else {
            if ($count === '') {
                $count = '1';
            }
            for ($i=0;$i<intval($count);$i++) {
                $output .= $inputCharacter;
            }
            $count = '';
        }
    }

    return $output;
}
