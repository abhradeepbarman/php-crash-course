<?php

$numbers = [1, 2, 3];
$squared = array_map(function ($n) {
    return $n * $n;
}, $numbers);

// var_dump($numbers, $squared);


$message = "Bye";
$greet = function($name) use ($message){
    // anonymous functions does not have access to variables outside of their scope
    // that's why we have used "use"
    // but anonymous functions cannot modify variables outside of their scope
    return "$message, $name!";
};
echo $greet("Abhra");