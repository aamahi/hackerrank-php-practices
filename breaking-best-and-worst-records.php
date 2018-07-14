<?php

// Complete the breakingRecords function below.
function breakingRecords($scores) {
    $totalScores = count($scores);
    $highest = $scores[0];
    $lowest = $scores[0];

    $numbers = [0,0];

    for ($i = 1; $i < $totalScores; $i++)
    {
        if ($scores[$i] > $highest){
            $highest = $scores[$i];
            $numbers[0]++;
        }
        if ($scores[$i] < $lowest){
            $lowest = $scores[$i];
            $numbers[1]++;
        }
    }

    return $numbers;

}

$fptr = fopen("OUTPUT_PATH.txt", "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $scores_temp);

$scores = array_map('intval', preg_split('/ /', $scores_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = breakingRecords($scores);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($stdin);
fclose($fptr);
