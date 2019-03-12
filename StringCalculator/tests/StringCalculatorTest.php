<?php declare(strict_types=1);

namespace StringCalculatorKata;

use PHPUnit\Framework\TestCase;

require "../src/StringCalculator.php";

final class StringCalculatorTests extends TestCase
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

}

