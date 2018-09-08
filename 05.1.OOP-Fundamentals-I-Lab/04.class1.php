<?php
/*
Use the Vehicle class by extending it to a new class Car. Add new
properties to it: brand, model, year. Write a constructor of Car that
will call the constructor of Vehicle and receive following parameters:
$numberDoors, $color, $brand, $model, $year.
Create an instance of Car with the following
parameters: Red Audi A4 2016 with 4 doors.
 */
class Vehicle
{
    protected $numberDoors;
    protected $color;

    public function __construct($numberDoors, $color)
    {
        $this->numberDoors=$numberDoors;
        $this->color=$color;
    }
}

class Car extends Vehicle
{
    public function __construct($numberDoors, $color , $brand, $model, $year)
    {
        parent::__construct($numberDoors, $color);
        $this->brand=$brand;
        $this->model=$model;
        $this->year=$year;
    }
}
$myCar = new Car(4, "Red", "Audi", "Quatro", 2008);
print_r($myCar);