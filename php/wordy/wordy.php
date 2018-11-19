<?php

function calculate($string)
{
    if (isStringStartBy($string, 'What is')) {
        $string = str_replace('?', '', $string);
        $result = getNextValue($string);

        while (strlen($string) > 0) {
            if (isStringStartBy($string, 'plus')) {
                $result += getNextValue($string);
            } else if (isStringStartBy($string, 'minus')) {
                $result -= getNextValue($string);
            } else if (isStringStartBy($string, 'multiplied by')) {
                $result *= getNextValue($string);
            } else if (isStringStartBy($string, 'divided by')) {
                $result /= getNextValue($string);
            } else {
                throw new InvalidArgumentException('Not valid string');
            }
        }
        return $result;
    } else {
        throw new InvalidArgumentException('Not valid string');
    }
}

function isStringStartBy(&$string, $word)
{
    $position = strlen($word);
    $isStartBy = substr($string, 0, $position) === $word;

    if ($isStartBy) {
        $string = substr($string, $position);
        passToNextWord($string);
    }
    return $isStartBy;
}

function getNextValue(&$string)
{
    $position = strpos($string, ' ');

    if ($position === false) {
        $value = intval($string);
        $string = '';
    } else {
        $value = intval(substr($string, 0, $position));
        $string = substr($string, $position);
    }

    passToNextWord($string);

    return $value;
}

function passToNextWord(&$string)
{
    if (strlen($string) >= 1) {
        $string = substr($string, 1);
    }
}
