<?php

function validateDate(string $date): bool
{
    $dateBlocks = explode("-", $date);

    if (count($dateBlocks) < 3) {
        return false;
    }

    if (isset($dateBlocks[0]) && $dateBlocks[0] > 31 || $dateBlocks[0] < 1) {
        return false;
    }

    if (isset($dateBlocks[1]) && $dateBlocks[1] > 12 || $dateBlocks[1] < 1) {
        return false;
    }

    if (isset($dateBlocks[2]) && $dateBlocks[2] > date('Y') && $dateBlocks[2] < 1900) {
        return false;
    }

    return true;
}

function validateName(string $name): bool
{
    if (strlen($name) === 0) return false;
    $arr = [];
    for ($i = 0; $i < strlen($name); $i++) {
        $arr[] = $name[$i];
    }
    if (array_intersect([0, 1, 2, 3, 4, 5, 6, 7, 8, 9, '=', '+', '/', '*', '~', '?', '|', '\\', '<', '>', '{', '}', '[', ']', ':', ';', '!'], $arr)) return false;

    return true;
}
