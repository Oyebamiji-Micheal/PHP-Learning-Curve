<?php

declare(strict_types=1);

require_once 'user.php';

$user = new User('Mike', 20);
var_dump($user->__get('name'));

echo '<br />';

$user->__set('name', 'Smith');
var_dump($user->__get('name'));
