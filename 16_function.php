<?php

function processMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as  $value) {
        $sum += $value;
    }
    return $sum;
}

$hiren = [56,67,79,88,98,78,90];
$sumMarks= processMarks($hiren); 
echo "Total marks scored by hiren out of 600 is $sumMarks";

?>