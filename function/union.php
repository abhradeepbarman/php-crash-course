<?php
declare(strict_types= 1);

function processInput(int|float|string $input) {
    return match(true) {
        is_int($input) => "Integer",
        is_float($input) => "Float",
        is_string($input) => "String",
    };
}

$str = processInput("Hiiii");
echo $str;