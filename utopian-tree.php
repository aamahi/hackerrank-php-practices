<?php

// Complete the utopianTree function below.
function utopianTree($n) {
    $height = 1;
    if ($n > 0){
        $i = 1;
        while ($i <= $n) {
            if ($i % 2 == 0) {
                $height += 1;
            }
            else {
                $height *= 2;
            }
            $i++;
        }
    }

    return $height;

}

$fptr = fopen("OUTPUT_PATH.txt", "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    fscanf($stdin, "%d\n", $n);

    $result = utopianTree($n);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);
