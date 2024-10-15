<?php

// function sum(...$nums) {
//     // parameter is taken as an array
//     $sum = 0;

//     foreach($nums as $num) {
//         $sum += $num;
//     }

//     return $sum;
// }

// echo sum(5,3,2);



function introduceTeam($teamName, ...$members) {
    echo "Team: $teamName\n";
    echo "Members: " . implode(", ", $members); 
}

introduceTeam("A", "John", "Helly");