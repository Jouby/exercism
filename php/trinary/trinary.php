<?php

function toDecimal($string)
{
    if (preg_match('/^[012]+$/', $string)) {
        return intval($string, 3);
    }

    return 0;
}
