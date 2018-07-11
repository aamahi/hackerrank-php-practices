<?php

// Complete the staircase function below.
function staircase($n) {
	for($i = 1 ; $i <= $n; $i++){
		for($j = $n;$j > 0; $j--){
			if($i >= $j)
				print '#';
			else
				print ' ';	
		}
		print "\n";
	}
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

staircase($n);

fclose($stdin);
