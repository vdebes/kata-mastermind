<?php

use Vdebes\KataMastermind\Result;

class ResultTest extends \PHPUnit\Framework\TestCase
{

    public function testEquality(): void
    {
        $first = new Result(1, 0);
        $same = new Result(1, 0);

        self::assertTrue($first->equals($same));
    }

    public function testInequality(): void
    {
        $first = new Result(1, 0);
        $different = new Result(1, 1);

        self::assertFalse($first->equals($different));
    }
}
