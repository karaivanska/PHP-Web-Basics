<?php
/*
Define a class Car with fields for brand, model and year.
Make a three instances of the class.
 */

class Car{
    public $brand;
    public $model;
    public $year;
}

$car = new Car();
$car->brand='Audi';
$car->model='TT';
$car->year=2005;

print_r($car);