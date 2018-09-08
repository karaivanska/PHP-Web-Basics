<?php
/*
1.	Add a set method for setting a property year
2.	Validate input in new method
3.	Add a get method for all properties
 */

class Car{
    public $brand;
    public $model;
    public $year;

    function __construct($brand, $model)
    {
        $this->brand=$brand;
        $this->model=$model;
    }

    function setYear($year){
        if(!is_numeric($year) && strlen($year) != 4){
            echo 'error';
        } else {
            $this->year=$year;
        }
    }

    function getBrand(){
        return $this->brand;
    }

    function getModel()
    {
        return $this->model;
    }

    function getYear(){
        return $this->year;
    }
}
$car = new Car('Audi', 'TT');
$car->setYear(2000);
print_r($car);