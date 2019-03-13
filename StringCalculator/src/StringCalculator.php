<?php
/**
 * Created by PhpStorm.
 * User: san
 * Date: 12/03/2019
 * Time: 10:54
 */

namespace StringCalculatorKata;

class StringCalculator
{

    /**
     * StringCalculator constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param string $numbersString
     *
     * @return int
     */
    public function add(string $numbersString): int
    {
        if ($numbersString === "") {
            return 0;
        }

        (int)$result = number_format($numbersString);
        return $result;
    }
}
