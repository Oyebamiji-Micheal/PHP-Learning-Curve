<?php

declare(Strict_types=1);
require_once 'user.php';

$user = new User();
var_dump(User::$name);

echo '<br />';

var_dump(User::printName('John'));
