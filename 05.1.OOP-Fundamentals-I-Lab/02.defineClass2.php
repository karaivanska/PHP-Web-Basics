<?php
/*
1)	Define two public setters called setDoors and setColor which set
the properties numberDoors and color.
2)	Define two public getters called GetDoors and getColor which will
return the two properties of the object.
3)	Rewrite the constructor to use SetDoors and setColor.
Write a magic getter that will return the value if it exists or return
a string “property doesn’t exist”. Use setDoors to set the number of
doors to 4 and get the number of doors by the magic getter.
 */

class Vehicle{
    private $numberOfDoors;
    private $color;

    public function __construct($numberOfDoors, $color)
    {
        $this->color=$color;
        $this->numberOfDoors=$numberOfDoors;
    }

    public function setDoors()
    {
        $this->numberOfDoors;
    }

    public function getDoors()
    {
        return $this->numberOfDoors;
    }

    public function setColor()
    {
        $this->color;
    }

    public function getColor()
    {
        return $this->color;
    }
}
$myVehicle = new Vehicle(5, "Orange");
echo $myVehicle->getDoors();