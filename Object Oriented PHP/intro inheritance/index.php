<?php

require_once 'user.php';
require_once 'admin.php';

$user = new User();
$user->name = 'Mike';
$user->email = 'mike@gmail.com';
var_dump($user->name, $user->email);

echo '<br />';

$admin = new Admin();
$admin->name = "Smith";
$admin->email = "smith@gmail.com";
$admin->level = "Senior Dev";
var_dump($admin->name, $admin->email, $admin->level);

$admin->welcomeMessage();