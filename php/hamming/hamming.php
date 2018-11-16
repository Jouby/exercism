<?php

function distance($a, $b)
{
    if (abs(strlen($a) - strlen($b)) > 0) {
        throw new InvalidArgumentException('DNA strands must be of equal length.');
    }

    $distance = 0;
    for ($i=0; $i<strlen($a); $i++) {
        if ($a[$i] !== $b[$i]) {
            $distance++;
        }
    }

    return $distance;
}
