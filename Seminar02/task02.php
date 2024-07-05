<?php

function isOdd(int $num) : bool
{
    for ($i = 2; $i < sqrt($num); $i++) {
        if ($num % $i === 0)
            return false;
    }
    return true;
}

echo isOdd(7) . "\n";
echo isOdd(40) . "\n";
echo isOdd(13) . "\n";
