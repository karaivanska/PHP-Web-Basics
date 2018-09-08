<?php
/*
Model an application which contains a class Ferrari and an interface. Your task is
simple, you have a car - Ferrari, its model is "488-Spider" and it has a driver.
Your Ferrari should have functionality to use brakes and push the gas pedal. When
the brakes are pushed down print "Brakes!", and when the gas pedal is pushed down -
"Zadu6avam sA!". As you may have guessed this functionality is typical for all cars,
so you should implement an interface to describe it. Your task is to create a Ferrari
and set the driver's name to the passed one in the input. After that, print the info.
Take a look at the Examples to understand the task better.
 */

interface iFerrari
{
    public function setBrake();
    public function setGas();
}

include '03.Ferrari.php';

$name = readline();
$driver = new Ferrari($name);
echo $driver;