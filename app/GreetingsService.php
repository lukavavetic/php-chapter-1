<?php

declare(strict_types=1);

namespace App;

final class GreetingsService
{
    public static function sayHelloToMyLittleFriend(string $to): string
    {
        return sprintf('Hello %s. I hope you will survive this boring presentation.', $to);
    }

    public static function sayGoodbye(): string
    {
        return 'Adios amigos.';
    }
}