<?php declare(strict_types=1);

namespace Test\FizzBuzzKata;

use PHPUnit\Framework\TestCase;
use FizzBuzzKata\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    private $fizzbuzz;

    protected function setUp(): void
    {
        $this->fizzbuzz = new FizzBuzz();
    }

    /** @test */
    public function givingNumber1tShouldReturn1(): void
    {
        $expected = "1";
        $actual = $this->fizzbuzz->say(1);

        $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function givingNumber2tShouldReturn2(): void
    {
        $expected = "2";
        $actual = $this->fizzbuzz->say(2);

        $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function givingNumber3tShouldReturnFizz(): void
    {
        $expected = "Fizz";
        $actual = $this->fizzbuzz->say(3);

        $this->assertEquals($expected, $actual);
    }
}
