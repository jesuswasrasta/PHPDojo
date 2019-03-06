<?php declare(strict_types=1);

namespace StringCalculator;

use PHPUnit\Framework\TestCase;

//require 'Calculator.php';

final class CalculatorTests extends TestCase
{
    private $calculator;

    public function testEmptyStringShouldReturnZero()
    {
        $result = $this->calculator->add("");
        $this->assertEquals(0, $result);
    }

}