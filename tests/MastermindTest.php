<?php

use PHPUnit\Framework\TestCase;
use Vdebes\KataMastermind\Green;
use Vdebes\KataMastermind\Mastermind;
use Vdebes\KataMastermind\Red;
use Vdebes\KataMastermind\Result;
use Vdebes\KataMastermind\Blue;

class MastermindTest extends TestCase
{
    public function testGoodGuess(): void
    {
        $secret = [new Blue(), new Red()];
        $testedInstance = new Mastermind(...$secret);

        $expectedResult = new Result(2, 0);

        self::assertTrue($testedInstance->guess($secret)->equals($expectedResult));
    }

    public function testBadGuess(): void
    {
        $secret = [new Blue(), new Red()];
        $testedInstance = new Mastermind(...$secret);
        $guess = [new Red(), new Green()];
        $expectedResult = new Result(0, 1);

        self::assertTrue($testedInstance->guess($guess)->equals($expectedResult));
    }

    public function testAllFails(): void
    {
        $secret = [new Blue(), new Red()];
        $testedInstance = new Mastermind(...$secret);
        $guess = [new Green(), new Green()];
        $expectedResult = new Result(0, 0);

        self::assertTrue($testedInstance->guess($guess)->equals($expectedResult));
    }

    public function testAllMisplaced(): void
    {
        $secret = [new Blue(), new Red()];
        $testedInstance = new Mastermind(...$secret);
        $guess = [new Red(), new Blue()];
        $expectedResult = new Result(0, 2);

        self::assertTrue($testedInstance->guess($guess)->equals($expectedResult));
    }

    public function resultDataProvider(): Generator
    {
        yield "" => [];
    }
}
