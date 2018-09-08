<?php
/*
Using the previous problem, add a second class, that define car
model extra details (engine, number of seats, horsepower,...).
Add this information as property of main class and populate it
via method. Make one instance, populate all properties and dump
the object.
 */

class Car
{
    public $brand;
    public $model;
    public $year;

    function __construct($brand, $model, $year, $engine, $numberOfSeats, $horsePower)
    {
        $this->brand = $brand;
        $this->model = new ModelDetails($engine, $numberOfSeats, $horsePower, $model);

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

class ModelDetails{
    public $engine;
    public $numberOfSeats;
    public $horsePower;

    function __construct($engine, $numberOfSeats, $horsePower, $model)
    {
        $this->model=$model;
        $this->engine=$engine;
        $this->numberOfSeats=$numberOfSeats;
        $this->horsePower=$horsePower;
    }
}

for ($i = 0; $i < 4; $i++) {
    $input = explode(' ', fgets(STDIN));
    $car = new Car($input[0], $input[1], trim($input[2]), trim($input[3]), $input[4], $input[5]);
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