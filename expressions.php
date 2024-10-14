<?php

echo "Welcome to PHP\n";

$name = "Abhra";
echo "Hello, " . $name . "!\n";

$pizzas = 3;
$slicesPerPizza = 8;
$totalSlice = $pizzas * $slicesPerPizza;
echo "Total pizza slices: " . $totalSlice . "\n";


$isHungry = false;
echo "Hungry? ";
echo $isHungry ? "Yes" : "No";
echo "\n";