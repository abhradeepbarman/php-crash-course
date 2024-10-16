<?php

$person = "John";
$client = &$person;  // alias

var_dump( $person, $client );

$client = "Robert";

var_dump( $person, $client );

$person = "Abhra";

var_dump( $person, $client );