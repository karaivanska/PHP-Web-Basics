<?php
/*
 Write a class DecimalNumber that has a method that prints all its
digits in reversed order.
 */

class Number{
    private $number;

    public function __construct(string $number)
    {
        $this->number=$number;
    }

    public function reverseNumber()
    {
        return strrev($this->number);
    }
}

$input = trim(fgets(STDIN));
$digits = new Number($input);
//echo $digits->reverseNumber();