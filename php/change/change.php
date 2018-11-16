<?php

function findFewestCoins($possibleValues, $amount)
{
    rsort($possibleValues);
    $coins = [];

    foreach ($possibleValues as $possibleValue) {
        for ($i=0;$i<floor($amount/$possibleValue);$i++) {
            $coins[] = $possibleValue;
        }

        $amount -= $possibleValue * floor($amount/$possibleValue);
    }

    sort($coins);
    var_dump($coins);

    return $coins;
}

findFewestCoins(array(1, 4, 15, 20, 50), 23);
// array(4, 4, 15)