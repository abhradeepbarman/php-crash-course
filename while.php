<?php

$secret = "magic";
$attempts = 0;
$maxAttempts = 5;

while($attempts < $maxAttempts) {
    echo "Guess the password: ";
    $guess = trim(fgets((STDIN)));
    $attempts++;

    if($guess == $secret) {
        echo "Correct! You have unlocked the secret!\n";
        break;
    }
    else if($attempts == $maxAttempts) {
        echo "Sorry, you have exceeded the maximum number of attempts.\n";
    }
}