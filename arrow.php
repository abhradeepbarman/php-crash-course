<?php

$numbers = [1,2,3,4];

$squared = array_map(
    fn ($n) => $n * $n, 
    $numbers
);

// arrow function can easily access global variables

var_dump($squared);