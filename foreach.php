<?php

$basket = [
    "apple" => 3,
    "banana" => 2
];

$cnt = 0;

foreach($basket as $item => $quantity) {
    echo "$item: $quantity\n";
    $cnt += $quantity;
}