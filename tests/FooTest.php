<?php

use PHPUnit\Framework\TestCase;
use Vdebes\KataMastermind\Foo;

class FooTest extends TestCase
{
    public function testFoo(): void
    {
        self::assertIsObject(new Foo());
    }
}