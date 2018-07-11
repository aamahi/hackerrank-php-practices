<?php

// Complete the solve function below.
function solve($a, $b) {
	$result = [0,0];
	foreach($a as $key => $aliceNumber)
	{
		if($aliceNumber > $b[$key])
		{
			$result[0]++;
		}elseif($aliceNumber < $b[$key])
		{
			$result[1]++;
		}
	}
	return $result;
}

$fptr = fopen("OUTPUT_PATH.txt", "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $a_temp);

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

fscanf($stdin, "%[^\n]", $b_temp);

$b = array_map('intval', preg_split('/ /', $b_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = solve($a, $b);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($stdin);
fclose($fptr);
