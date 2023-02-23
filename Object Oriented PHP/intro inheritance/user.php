<?php

declare(strict_types=1);

class User
{
    public string $name;
    public string $email;

    public function welcomeMessage()
    {
        return 'Hello, have a good working day!';
    }
}
