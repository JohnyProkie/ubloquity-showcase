<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertSame;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }


    public function testMore()
    {
        self::assertFalse(false);
    }

    public function testA()
    {
        self::assertSame('A', 'A');
    }
    public function testB()
    {
        self::assertSame('A', 'A');
    }
    public function testC()
    {
        self::assertSame('A', 'A');
    }
    public function testD()
    {
        self::assertSame('A', 'A');
    }
    public function testE()
    {
        self::assertSame('A', 'A');
    }

}
