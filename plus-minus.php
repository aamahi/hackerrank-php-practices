<?php

// Complete the plusMinus function below.
function plusMinus($arr) {
	$posativeN = 0;
	$negetiveN = 0;
	$zeroN = 0;
	foreach($arr as $key => $value){
		if($value < 0){
			$negetiveN++;
		}
		elseif($value > 0){
			$posativeN++;
		}
		else{
			$zeroN++;
		}
		
	}
	$length = $key+1;
	print (number_format(($posativeN/$length), 6)). "\n";
	print (number_format(($negetiveN/$length), 6)). "\n";
	print (number_format(($zeroN/$length), 6)). "\n";
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);

fclose($stdin);
