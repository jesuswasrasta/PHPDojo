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
        $delimiter = ",";
        $numbers = explode ( $delimiter , $numbersString);
        (int)$result = 0;
        foreach ($numbers as $value){
            $result += number_format($value);
        }

        return $result;
    }
}
