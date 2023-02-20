<?php

// Arrays

$programmingLanguages = ['C', 'C++', 'Java', 'Python', 'PHP'];

// printing an array
print_r($programmingLanguages);
echo '<br />';

// Indexing Arrays
echo $programmingLanguages[0] . '<br />';
echo $programmingLanguages[2] . '<br />';

// Number of elements in an array
echo count($programmingLanguages) . '<br />';

// Add elements to array
array_push($programmingLanguages, 'Pascal', 'JavaScript');
echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

// Associative arrays
$programmingLanguages = [
    'php' => 'weakly typed',
    'java' => 'strongly typed',
    'javascript' => 'weakly typed',
];
echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

// Remove last element from array
array_pop($programmingLanguages);
echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

// Remove first element from array
array_shift($programmingLanguages);
echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

// Check if element is present in array
var_dump(array_key_exists('C++', $programmingLanguages));