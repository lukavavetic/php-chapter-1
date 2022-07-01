<?php

use App\GreetingsService;

require __DIR__.'/../vendor/autoload.php';

$greeting = GreetingsService::sayHelloToMyLittleFriend('PHP Chapter crew');

echo $greeting;
