<?php

$arr1 = [1, 4, 6, 6, 8];
$arr2 = [2, 5, 7, 9];
$concatArr = [];

for ($i = 0, $j = 0; $i < count($arr1) && $j < count($arr2); ) {
    $arr1[$i] < $arr2[$j] ? $concatArr[] = $arr1[$i++] : $concatArr[] = $arr2[$j++];
}
$arr1[count($arr1) - 1] > $arr2[count($arr2) - 1] ? $concatArr[] = $arr1[count($arr1) - 1] : $concatArr[] = $arr2[count($arr2) - 1];

//echo "<pre>";
print_r($concatArr);
