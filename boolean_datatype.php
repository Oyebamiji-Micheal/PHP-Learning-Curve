<?php 

// Boolean DataType

// integers 0 -0 ==> false
// float 0.0, -0.0 ==> false
// '' ==> false
// '0' ==> false
// [] ==> false
// null ==> false

$isComplete = true;
echo $isComplete . '<br />';

var_dump($isComplete);