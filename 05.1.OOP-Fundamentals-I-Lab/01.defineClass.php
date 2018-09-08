<?php
/*Define a class Vehicle  that has the following private properties:
numberDoors, color.  Define a constructor for the class that takes
all properties as parameters and sets them. Create a new instance
of Vehicle called $myVehicle.
 */

class Vehicle{
    private $numberOfDoors;
    private $color;

    public function __construct($numberOfDoors, $color)
    {
        $this->color=$color;
        $this->numberOfDoors=$numberOfDoors;
    }
}
$myVehicle = new Vehicle(2, "Orange");
print_r($myVehicle);