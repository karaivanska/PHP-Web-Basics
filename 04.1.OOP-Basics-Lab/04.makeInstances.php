<?php
/*
Using the Car class, write a program that reads from the console 4
lines of car information information. Every line contains brand,
model and  year, separated by space. Make list of objects of class Car.
On finish - prints all cars, sorted in alphabetical order by brand,
model and year.
 */

class Car
{
    public $brand;
    public $model;
    public $year;

    function __construct($brand, $model, $year)
    {
        $this->brand = $brand;
        $this->model = $model;

        if (is_numeric($year) && strlen($year) == 4) {
            $this->year = $year;
        }
    }

    function getBrand()
    {
        return $this->brand;
    }

    function getModel()
    {
        return $this->model;
    }

    function getYear()
    {
        return $this->year;
    }
}

for ($i = 0; $i < 4; $i++) {
    $input = explode(' ', fgets(STDIN));
    $car = new Car($input[0], $input[1], trim($input[2]));
    $cars[] = $car;
}

usort($cars, "cmp");

function cmp($a, $b){
    $res = strcmp($a->brand, $b->brand);
    $res .= strcmp($a->model, $b->model);
    $res .= $a->year - $b->year;

    return $res;
}
print_r($cars);



