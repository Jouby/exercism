<?php

function findFewestCoins($coins, $amount){
    if ($amount < 0) {
        throw new InvalidArgumentException("Cannot make change for negative value");
    }

    rsort($coins);
    $change = process($coins, $amount);
    //see if there's a better solution with fewer coins by skipping the largest value used
    $first = count($change);
    $change2 = process($coins, $amount, $change[0], false);
    $second = count($change2);
    if ($second < $first){
        $change = $change2;
    }

    sort($change);
    return $change;
}

function process($coins, $amount, $avoidCoin = null, $exception = true)
{
    $change = [];
    //$initAmount = $amount;

    while($amount){
        foreach($coins as $c){
            if ($avoidCoin && $c == $avoidCoin){
                continue;
            }
            if ($amount >= $c){
                $change[] = $c;
                $amount -= $c;
                continue 2;
            }
        }
        if ($exception /*&& count($coins) > 1*/) {
            //array_shift($coins);
            //process($coins, $initAmount);
            throw new InvalidArgumentException("No coins small enough to make change");
        }
        break;
    }

    return $change;
}
