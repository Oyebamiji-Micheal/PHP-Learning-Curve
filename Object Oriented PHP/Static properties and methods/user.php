<?php

declare(Strict_types=1);

class User
{
    public static string $name = 'Mike';

    public static function printName(string $name): string
    {
        return 'Your name is ' . self::$name;
        // return "Your name is " . $name;
    }
}
