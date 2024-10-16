<?php

$haystack = "The quick brown fox";
$pos = strpos($haystack, "quick");
var_dump($pos);

var_dump(str_replace("quick", "slow", $haystack));