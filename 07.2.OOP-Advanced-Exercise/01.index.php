<?php
/*
Define an interface Person with two methods that should be implemented by a class:
setName() and setAge().
Define a class Citizen which implements Person and has a constructor which takes a
string name and an int age and uses the methods given by the interface. Write the
methods and add a magic method __toString() which willl print the name and age of
the person (example: Jackson, 35).  Create an instance of the class and use the
magic method __toString() to print the name and age of the person.
 */
include '01.Citizen.php';

interface iPerson{
    public function setName($name);
    public function setAge($age);
}

$myCitizen = new Citizen('Petar', 23);
echo $myCitizen;
