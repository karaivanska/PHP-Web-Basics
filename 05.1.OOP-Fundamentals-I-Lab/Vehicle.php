<?php
/*
Use the Vehicle class by extending it to a new class Car. Add new
properties to it: brand, model, year. Write a constructor of Car that
will call the constructor of Vehicle and receive following parameters:
$numberDoors, $color, $brand, $model, $year.
Seaparate the classes in two files: Vehicle.php and Car.php. Include
Vehicle.php in Car.php. Create an instance of Car with the following
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

