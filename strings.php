<?php

$name = "Abhra";

// $docs = 'Hello, $name\n';  // takes everything as literal
// $newDocs = "Hello, $name\n";   

// echo $docs;
// echo $newDocs;


// Multi Line strings

$heroDocs = <<<EOD
Hello, $name
We are learning PHP\n
EOD;

echo $heroDocs;



$heroDocs2 = <<<'EOD'
Hello, $name
We are learning PHP\n
EOD;  // takes everything as it is

echo $heroDocs2;