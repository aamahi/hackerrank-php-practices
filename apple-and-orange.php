<?php

// Complete the countApplesAndOranges function below.
function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {
	$appleCatch = 0;
	$orangeCatch = 0;
	foreach($apples as $apple)
	{
		$droppedApplePos = ($a + $apple);
		echo 'Apple position'.$droppedApplePos;
		if($droppedApplePos >= $s && $droppedApplePos <= $t){
			$appleCatch++;
		}
	}
	foreach($oranges as $orange)
	{
		$droppedOrangePos = ($b + $orange);
		echo 'Orane position'.$droppedOrangePos;
		if($droppedOrangePos <= $s && $droppedOrangePos >= $t){
			$orangeCatch++;
		}
	}
	print $appleCatch."\n";
	print $orangeCatch;

}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $st_temp);
$st = explode(' ', $st_temp);

$s = intval($st[0]);

$t = intval($st[1]);

fscanf($stdin, "%[^\n]", $ab_temp);
$ab = explode(' ', $ab_temp);

$a = intval($ab[0]);

$b = intval($ab[1]);

fscanf($stdin, "%[^\n]", $mn_temp);
$mn = explode(' ', $mn_temp);

$m = intval($mn[0]);

$n = intval($mn[1]);

fscanf($stdin, "%[^\n]", $apples_temp);

$apples = array_map('intval', preg_split('/ /', $apples_temp, -1, PREG_SPLIT_NO_EMPTY));

fscanf($stdin, "%[^\n]", $oranges_temp);

$oranges = array_map('intval', preg_split('/ /', $oranges_temp, -1, PREG_SPLIT_NO_EMPTY));

countApplesAndOranges($s, $t, $a, $b, $apples, $oranges);

fclose($stdin);
