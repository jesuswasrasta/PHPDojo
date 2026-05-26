<?php declare(strict_types=1);

namespace StringCalculatorKata;

use PHPUnit\Framework\TestCase;

require __DIR__ . "/../src/StringCalculator.php";

final class StringCalculatorTest extends TestCase
{
    private $calculator;

    protected function setUp(): void
    {
        $this->calculator = new StringCalculator();
    }

    protected function tearDown(): void
    {
        $this->calculator = NULL;
    }

    public function testEmptyStringShouldReturnZero()
    {
        $result = $this->calculator->add("");
        $this->assertEquals(0, $result);
    }

    public function testOneAsStringShouldReturnOne()
    {
        $result = $this->calculator->add("1");
        $this->assertEquals(1, $result);
    }

    public function testTwoAsStringShouldReturnTwo()
    {
        $result = $this->calculator->add("2");
        $this->assertEquals(2, $result);
    }

    public function testThreeAsStringShouldReturnThree()
    {
        $result = $this->calculator->add("3");
        $this->assertEquals(3, $result);
    }

    public function testSumOfOneAndTwoShouldReturnThree()
    {
        $result = $this->calculator->add("1,2");
        $this->assertEquals(3, $result);
    }

    public function testSumOfOneTwoAndThreeShouldReturnSix()
    {
        $result = $this->calculator->add("1,2,3");
        $this->assertEquals(6, $result);
    }
}

