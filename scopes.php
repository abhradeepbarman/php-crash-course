<?php

$superhero = "Ironman";

function identity($superhero) {
    // global variables are not accessible here
    // global $superhero
    
    echo "$superhero real name is Tony Stark\n";
}

identity($superhero);