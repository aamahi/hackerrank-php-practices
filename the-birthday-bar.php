<?php

// Complete the birthday function below.
function birthday($s, $d, $m) {
    $sLength = count($s);
    $result =  0;
    for ($i = 0; $i < $sLength; $i++){
        $limit = $i + $m;
        if ($limit > $sLength){
            break;
        }
        $sum = 0;
        for ($j = $i; $j < $limit; $j++){
            $sum += $s[$j];
        }

        if ($sum == $d){
            ++$result;
        }
    }
    return $result;
}

$fptr = fopen("OUTPUT_PATH.txt", "w");

$n = intval(trim(fgets(STDIN)));

$s_temp = rtrim(fgets(STDIN));

$s = array_map('intval', preg_split('/ /', $s_temp, -1, PREG_SPLIT_NO_EMPTY));

$dm = explode(' ', rtrim(fgets(STDIN)));

$d = intval($dm[0]);

$m = intval($dm[1]);

$result = birthday($s, $d, $m);

fwrite($fptr, $result . "\n");

fclose($fptr);
