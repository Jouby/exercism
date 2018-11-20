<?php

function accumulate(array $input, callable $accumulator)
{
    if (is_array($input)) {
        $output = [];
        foreach($input as $value) {
            $output[] = $accumulator($value);
        }
        return $output;
    } else {
        return $accumulator($input);
    }
}
