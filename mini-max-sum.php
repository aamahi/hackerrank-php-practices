<?php

// Complete the miniMaxSum function below.
function miniMaxSum($arr) {
	$sum = [];

	for($i = 0; $i < 5; $i++)
	{
		$tempArray = $arr;
		unset($tempArray[$i]);
		$sum[] = array_sum($tempArray);
	}
	print min($sum)." ".max($sum);
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);

fclose($stdin);
