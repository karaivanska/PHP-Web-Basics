<?php
/*
Write a class Number that will hold an integer number. Write a method in the class
that returns the English name of the last digit of the given number. Write a
program that reads an integer and prints the returned value from this method.
 */

class Number{
    private $number;

    public function __construct(int $number)
    {
        $this->number=$number;
    }

    public function findLastDigit()
    {
        $this->number = $this->number % 10;

        if($this->number == 0){
            $this->number = 'zero';
        }else if($this->number == 1){
            $this->number = 'one';
        } else if($this->number == 2){
            $this->number = 'two';
        }else if($this->number == 3){
            $this->number = 'three';
        }else if($this->number == 4){
            $this->number = 'four';
        }else if($this->number == 5){
            $this->number = 'five';
        }else if($this->number == 6){
            $this->number = 'six';
        }else if($this->number == 7){
            $this->number = 'seven';
        }else if($this->number == 8){
            $this->number = 'eight';
        }else if($this->number == 9){
            $this->number = 'nine';
        }
        return $this->number;
    }
}

$input = intval(fgets(STDIN));
$digits = new Number($input);
echo $digits->findLastDigit();
