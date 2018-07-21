<?php

// Complete the viralAdvertising function below.
function viralAdvertising($n) {
    $people = 5;
    $sum = 0;
    while ($n){
        $people = floor($people/2);
        $sum += $people;
        $people *= 3;
        $n--;
    }
    return $sum;
}

$fptr = fopen("OUTPUT_PATH.txt", "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$result = viralAdvertising($n);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
