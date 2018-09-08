<?php
/*
We can have more types of vehicles in the real world. The bicycle
is another type of vehicle. An important fact for all bicycles is
that they do not have doors. So the constructor of the Bicycle
class should set the numberDoors property to 0! Bicycles can have
also a brand, model and year properties. Another property would be
forSkirt  = null |true | false, which shows whether it is suitable
to be used when you wear a skirt (cars don’t have such a property).
Write a method __toString() that would print all data about the
bicycle in an HTML table.
Add a property that shows whether someone rides the bike (true | false).
Write a method that sets the bicycle to ride mode. You may call the
method Ride(). Write a method that stops the bike. You may call it
Stop(). Write a new setDoors which will overwrite the one in the
parent class. It is without arguments because bikes don’t have doors.
Change your constructor to use the new overwritten setDoors.
Create two instances of the Bicycle class $b1 and $b2, change the
mode of b1 to ride and b2 to stop.
*/

class Vehicle
{
    protected $numberDoors;
    protected $color;

    public function __construct($numberDoors, $color)
    {
        $this->numberDoors = $numberDoors;
        $this->color = $color;
    }
}

class Car extends Vehicle
{
    protected $brand;
    protected $model;
    protected $year;

    public function __construct($numberDoors, $color , $brand, $model, $year)
    {
        parent::__construct($numberDoors, $color);
        $this->brand=$brand;
        $this->model=$model;
        $this->year=$year;
    }
}

class Bicycle extends Vehicle
{
    protected $brand;
    protected $model;
    protected $year;
    protected $forSkirt;
    protected $rider;

    public function __construct($numberDoors, $color , $brand, $model, $year, $forSkirt, $rider)
    {
        parent::__construct($numberDoors, $color);
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->forSkirt=$forSkirt;
        $this->rider=$rider;
    }

    public function __toString()
    {
        $output = "Number of doors: " . $this->numberDoors . "\n";
        $output .= "Color: " . $this->color . "\n";
        $output .= "Brand: " . $this->brand . "\n";
        $output .= "Model: " . $this->model . "\n";
        $output .= "Year: " . $this->year . "\n";
        $output .= "Skirt: " . $this->forSkirt . "\n";
        $output .= "Rider: " . $this->rider . "\n";

        return $output;
    }

    public function rideMode($mode)
    {
        $this->ride=$mode;
    }

    public function stopMode($mode)
    {
        $this->ride=$mode;
    }
}
$myVehicle = new Bicycle(0, 'Green', 'Brand', 'DGF', 2010, "true", "true");
echo $myVehicle;

$b1 = new Bicycle(0, 'Green', 'Brand', 'DGF', 2010, "true", "true");
$b1->rideMode("ride mode");
print_r($b1);

$b2 = new Bicycle(0, 'Green', 'Brand', 'DGF', 2010, "true", "true");
$b2->stopMode("stop mode");
print_r($b2);
