<?php

// Complete the diagonalDifference function below.
function diagonalDifference($arr) {
	$leftToRightSum = 0;
	$rightToLeftSum = 0;
	$length = count($arr) - 1;
	foreach($arr as $key => $value){
		$leftToRightSum+= $value[$key];
		$rightToLeftSum+= $value[$length--];
	}
	
	return abs($leftToRightSum - $rightToLeftSum);
}

$fptr = fopen("OUTPUT_PATH.txt", "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$arr = array();

for ($i = 0; $i < $n; $i++) {
    fscanf($stdin, "%[^\n]", $arr_temp);
    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
