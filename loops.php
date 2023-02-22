<?php

// Loops

// for loop
for ($i = 0; $i < 10; $i++) {
    echo $i . ',';
}
echo '<br />';

// while loop
$i = 0;
while ($i <= 10) {
    echo $i++ . ',';
}
echo '<br />';

// foreach loop
$names = ['Mike', 'Agent', 'Smith', 'Matrix'];
foreach ($names as $name) {
    echo $name . '<br />';
}

$student_data = [
    'surname' => 'Mike',
    'major' => 'Computer Science',
    'emotions' => 'Not Applicable',
];
foreach ($student_data as $key => $value) {
    echo $key . ': ' . $value . '<br />';
}
