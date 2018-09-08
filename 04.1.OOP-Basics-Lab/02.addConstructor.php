<?php
/*
1.	Add constructor to the Car class from the last task
2.	It should accept a two  arguments - brand and model
and set it as properties.
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
}
$car[] = new Car('Audi', 'TT');
print_r($car);