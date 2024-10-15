<?php
declare(strict_types = 1);

// PHP 5 - types
// PHP 7 - strict types

function add(int $a, int $b): int {
    return $a + $b;
}

// var_dump(add("5",3)); // error
var_dump(add(5,3)); // ok