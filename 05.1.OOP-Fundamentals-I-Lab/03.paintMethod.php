<?php
/**
 * Created by PhpStorm.
 * User: karai
 * Date: 22-Apr-18
 * Time: 11.index.php:00
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

    public function setColor($color)
    {
        $this->color=$color;
    }
}
$myVehicle = new Vehicle(4, "Red");
$myVehicle->setColor("Yellow");
print_r($myVehicle);