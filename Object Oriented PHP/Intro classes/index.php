<?php

declare(strict_types=1);

require_once 'intro_classes.php';

// Classes and Objects
$transaction1 = new Transaction(100, 'Transaction 1');
$transaction2 = new Transaction(300, 'Transaction 2');

$transaction1->addTax(8);
$transaction1->applyDiscount(10);

$transaction2->addTax(10);
$transaction2->applyDiscount(12);

var_dump($transaction1->getAmount());
var_dump($transaction2->getAmount());
