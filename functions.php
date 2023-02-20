<?php

// Functions

declare(strict_types=1);

function greet()
{
    echo 'Hello World' . '<br />';
}
greet();

// First n fibonacci number
function fibonacci(int $num)
{
    if ($num == 0 || $num == 1) {
        echo $num;
        return;
    }

    $nums = [0, 1];
    for ($i = 1; $i < $num; $i++) {
        array_push($nums, $nums[$i] + $nums[$i - 1]);
    }
    echo '<pre>';
    print_r($nums);
    echo '</pre>';
}

fibonacci(10);


function sum(int|float ...$nums): int|float
{
    return array_sum($nums);
}

$result = sum(2, 5, 3.2, 11);
echo $result . '<br />';