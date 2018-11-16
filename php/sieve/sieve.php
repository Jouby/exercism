<?php

function sieve($limitNumber)
{
    $range = $primeNumbers = [];
    for ($i=2; $i<=$limitNumber;$i++) {
        $range[] = $i;
    }

    $current = current($range);
    while($current) {
        foreach ($range as $index => $number) {
            if ($number%$current === 0 && $number !== $current) {
                unset($range[$index]);
            }
        }
        $primeNumbers[] = $current;
        $current = next($range);
    }

    return $primeNumbers;
}
