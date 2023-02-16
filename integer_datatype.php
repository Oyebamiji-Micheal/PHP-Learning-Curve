<?php

// Integer Data type

echo PHP_INT_MAX . '<br />';
echo PHP_INT_MIN . '<br />';

$num_decimal = 20; // base 10
$num_hex = 0x20; // hexamdecimal
$num_bin = 0b1101; //binary

echo $num_decimal . '<br />';
echo $num_hex . '<br />';
echo $num_bin . '<br />';

var_dump($num_decimal);
var_dump($num_hex);
var_dump($num_bin);

// check if variable is an integer
var_dump(is_int($num_bin));
$var = null;
var_dump(is_int($var));
