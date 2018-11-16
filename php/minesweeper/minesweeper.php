<?php

function solve($board)
{
    $lines = preg_split("/((\r?\n)|(\r\n?))/", trim($board));
    $linesNumber = count($lines);
    $firstLine = $lines[0];
    $lineLength = strlen($firstLine);

    if (preg_match('/^\+-+\+$/', $firstLine)) {
        for ($i=1;$i<$linesNumber-1;$i++) {
            if (preg_match('/^\|.{2,}\|$/', $lines[$i])) {
                $lineNumber = strlen($lines[$i]);
                if ($lineLength !== $lineNumber) {
                    throw new InvalidArgumentException();
                }

                for ($j=1;$j<$lineNumber-1;$j++) {
                    if ($lines[$i][$j] === ' ') {
                        $lines[$i][$j] = checkAround($lines, $i, $j);
                    } else if ($lines[$i][$j] !== '*') {
                        throw new InvalidArgumentException();
                    }
                }
            } else {
                throw new InvalidArgumentException();
            }
        }
    } else {
        throw new InvalidArgumentException();
    }

    return '
'.implode('
', $lines).'
';
}

function checkAround($lines, $i, $j)
{
    $count = 0;
    for ($ii=$i-1;$ii<=$i+1;$ii++) {
        for ($jj=$j-1;$jj<=$j+1;$jj++) {
            if (isset($lines[$ii][$jj]) && $lines[$ii][$jj] === '*') {
                $count++;
            }
        }
    }

    if ($count === 0) {
        $count = ' ';
    }

    return $count;
}
