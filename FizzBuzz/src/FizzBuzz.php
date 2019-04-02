<?php


namespace FizzBuzzKata;


class FizzBuzz
{

    /**
     * FizzBuzz constructor.
     */
    public function __construct()
    {
    }


    /**
     * @param int $givenNumber
     * @return string
     */
    public function say(int $givenNumber): string
    {
        if ($givenNumber == '3')
        {
            return "Fizz";
        }
        else
        {
            return $givenNumber;
        }
    }
}