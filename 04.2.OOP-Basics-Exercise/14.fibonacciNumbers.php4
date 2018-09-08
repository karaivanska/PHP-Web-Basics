<?php
/*
Define a class Fibonacci. It should keep a list of all Fibonacci
numbers starting from 0, 1 until Nth number in the sequence. Write
a method in the Fibonacci class that receives as parameters start
position and end position and returns part of the sequence starting
from start position (inclusive) until end position (exclusive).
ArrayList<Long> getNumbersInRange(int startPosition, int endPosition).
Write a program that reads start position and end position and prints
the Fibonacci numbers in that range.
 */


class Fibonacci
{
    private $fibonacci = [0, 1];

    function getFibonacciRange(int $startIndex, int $endIndex)
    {
        for ($i = 2; $i < $endIndex; $i++) {
            $a = $this->fibonacci[$i - 2];
            $b = $this->fibonacci[$i - 1];
            $this->fibonacci[] = $a + $b;
        }
        $numsRange = array_slice($this->fibonacci, $startIndex, $endIndex);
        return implode(", ", $numsRange);
    }
}
$start = intval(trim(fgets(STDIN)));
$end = intval(trim(fgets(STDIN)));
$number = new Fibonacci($start, $end);
echo $number->getFibonacciRange($start, $end);
