<?php

function calculateResult($marks) {
    
    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            echo "Mark range is invalid.\n";
            return;
        }
    }

    
    foreach ($marks as $mark) {
        if ($mark < 33) {
            echo "The student has failed.\n";
            return;
        }
    }

    
    $total = array_sum($marks);
    $average = $total / count($marks);

    
    $grade = '';
    switch (true) {
        case $average >= 80 && $average <= 100:
            $grade = 'A+';
            break;
        case $average >= 70 && $average < 80:
            $grade = 'A';
            break;
        case $average >= 60 && $average < 70:
            $grade = 'A-';
            break;
        case $average >= 50 && $average < 60:
            $grade = 'B';
            break;
        case $average >= 40 && $average < 50:
            $grade = 'C';
            break;
        case $average >= 33 && $average < 40:
            $grade = 'D';
            break;
        default:
            $grade = 'F';
            break;
    }

    
    echo "Total Marks: $total <br /> <br />";
    

    echo "Average Marks: $average <br /> <br />";
    
   
    echo "Grade: $grade";
}


$marks = [40, 48, 65, 34, 45];  
calculateResult($marks);


