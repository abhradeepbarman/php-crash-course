<?php

function doubleValue(int &$num): int {
    $num *= 2;
    return $num;
}

$originalNum = 5;
doubleValue($originalNum);
var_dump($originalNum);