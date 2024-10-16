<?php

function greet(string $name, string $greeting = 'Hello') {
    $message = "$greeting, $name!";
    echo $message . "\n";
}

greet('Abhra');
greet('Abhra', "Hi");
greet(greeting:"HELLO", name: "Abhra");  // named argument. we dont have to remember the order of arguments