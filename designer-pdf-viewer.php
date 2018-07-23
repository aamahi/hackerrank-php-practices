<?php

// Complete the designerPdfViewer function below.
function designerPdfViewer($h, $word) {
    $wordArray = array_combine(range('a','z'),$h);
    $word = preg_replace('/\s+/', '', $word);
    $stringLetters = str_split($word);
    $matchedArray = [];
    $key = 0;

    foreach ($stringLetters as $key => $stringLetter)
    {
        $matchedArray[] = $wordArray[$stringLetter];
    }
    return max($matchedArray) * ($key+1);
}

$fptr = fopen("OUTPUT_PATH.txt", "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $h_temp);

$h = array_map('intval', preg_split('/ /', $h_temp, -1, PREG_SPLIT_NO_EMPTY));

$word = '';
fscanf($stdin, "%[^\n]", $word);

$result = designerPdfViewer($h, $word);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
