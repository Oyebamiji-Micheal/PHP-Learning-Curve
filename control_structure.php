<?php

// Control Structures

$age = 12;

if ($age >= 18) {
    echo "You are eligible to vote" . "<br />";  
} else {
    echo "You are not eligible to vote" . "<br />";
}

$score = 71;
if ($score >= 70) {
    $grade = "A";
} elseif ($score >= 60) {
    $grade = "B";
} elseif ($score >= 50) {
    $grade = "C";
} elseif ($score >= 45) {
    $grade = "D";
} else {
    $grade = "F";
}

echo "{$grade}" . "<br />";