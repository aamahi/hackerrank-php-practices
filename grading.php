<?php


function gradingStudents($grades) {
    $finalGrades = [];
    foreach ($grades as $key => $grade)
    {
        if ($grade >= 38){
            $nextMultipliedNumber = round(($grade+5/2)/5)*5;
            if (($nextMultipliedNumber - $grade) < 3)
            {
                $finalGrades[] = $nextMultipliedNumber;
            }
            else{
                $finalGrades[] = $grade;
            }
        }else{
            $finalGrades[] = $grade;
        }
    }

    return $finalGrades;
}

$fptr = fopen("OUTPUT_PATH.txt", "w");

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%d\n", $n);

$grades = array();

for ($grades_itr = 0; $grades_itr < $n; $grades_itr++) {
    fscanf($__fp, "%d\n", $grades_item);
    $grades[] = $grades_item;
}

$result = gradingStudents($grades);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($__fp);
fclose($fptr);
