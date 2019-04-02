<?php

namespace Test\FizzBuzzKata;

use PHPUnit\Framework\TestCase;
use FizzBuzzKata\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    /** @test */
    public function givingNumber1tShouldReturn1() : void {
        $fizzbuzz = new FizzBuzz();
        $expected = 1;
        $actual = $fizzbuzz->say(1);

        $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function givingNumber2tShouldReturn2() : void {
        $fizzbuzz = new FizzBuzz();
        $expected = 2;
        $actual = $fizzbuzz->say(2);

        $this->assertEquals($expected, $actual);
    }
}
