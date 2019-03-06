<?php declare(strict_types=1);

namespace StringCalculator;

use PHPUnit\Framework\TestCase;

require "../src/StringCalculator.php";

final class CalculatorTests extends TestCase
{
    private $calculator;

    public function testEmptyStringShouldReturnZero()
    {
        $this->calculator = new StringCalculator();
        $result = $this->calculator->add("");
        $this->assertEquals(0, $result);
    }

}