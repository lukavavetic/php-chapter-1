<?php

namespace Tests\Unit;

use App\GreetingsService;
use PHPUnit\Framework\TestCase;

class GreetingsServiceTest extends TestCase
{
    public function test_service_greets_proper_person()
    {
        $greetings = GreetingsService::sayHelloToMyLittleFriend('PHP Chapter crew');

        $expected = 'Hello PHP Chapter crew. I hope you will survive this boring presentation.';

        $this->assertSame($greetings, $expected);
    }
}
