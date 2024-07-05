<?php

function bracketsParser(string $line) : bool
{
    $opensCount = 0;
    $closeCount = 0;
    for ($i = 0; $i < mb_strlen($line); $i++) {
        switch ($line[$i]) {
            case "(":
                $opensCount++;
                break;
            case ")":
                $closeCount++;
        }
        if ($closeCount > $opensCount)
            return false;
    }
    if ($closeCount !== $opensCount)
        return false;
    return true;
}

echo bracketsParser("()") . PHP_EOL;
echo bracketsParser("()))") . PHP_EOL;
echo bracketsParser("()(()())") . PHP_EOL;
echo bracketsParser("()(())()") . PHP_EOL;
