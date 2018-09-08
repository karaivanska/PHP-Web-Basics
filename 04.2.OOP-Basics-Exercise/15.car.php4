<?php
/*
Create a class Car. Every car has a speed (km/h), fuel (liters) and fuel economy (L/100km)
(given in the same order on the first line). They should be stored in the class. Your task
is to create a program which executes one of the commands:
•	Travel <distance> – makes the car travel the specified <distance>
If you are given a distance which you don't have enough fuel to travel, just go as far as
you can.
•	Refuel <liters> – refuels the car with the specified <fuel>
•	Distance – gets the total travel distance
•	Time – get the total travel time
•	Fuel – gets the remaining fuel
•	END – stops the program
 */

class Car
{
    private $speed;
    private $fuel;
    private $fuelEconomy;
    private $distanceTraveled = 0.0;
    private $timeTraveled = 0.0;
    private $minutesPerKm = 0.0;
    private $fuelPerKm = 0.0;
    public function __construct(float $speed, float $fuel, float $fuelEconomy)
    {
        $this->speed = $speed;
        $this->fuel = $fuel;
        $this->fuelEconomy = $fuelEconomy;
        $this->minutesPerKm = 60 / $this->speed;
        $this->fuelPerKm = $this->fuelEconomy / 100;
    }
    public function travel(float $distance)
    {
        $requiredFuel = $this->fuelPerKm * $distance;
        if ($requiredFuel <= $this->fuel) {
            $this->fuel -= $requiredFuel;
            $this->distanceTraveled += $distance;
            $this->timeTraveled += $distance * $this->minutesPerKm;
        } else {
            $possibleDistance = $this->fuel / $this->fuelPerKm;
            $this->distanceTraveled += $possibleDistance;
            $this->fuel = 0;
            $this->timeTraveled += $possibleDistance * $this->minutesPerKm;
        }
    }
    public function reFuel(float $fuel)
    {
        $this->fuel += $fuel;
    }
    public function printDistance()
    {
        $formatted = number_format(round($this->distanceTraveled, 1), 1);
        echo "Total Distance: {$formatted}" . PHP_EOL;
    }
    public function printTime()
    {
        $hours = floor($this->timeTraveled / 60);
        $minutes = floor($this->timeTraveled % 60);
        echo "Total Time: {$hours} hours and {$minutes} minutes" . PHP_EOL;
    }
    public function printFuel()
    {
        $formatted = number_format(round($this->fuel, 1), 1);
        echo "Fuel left: {$formatted} liters" . PHP_EOL;
    }
}
$input = explode(" ", fgets(STDIN));
$speed = floatval($input[0]);
$fuel = floatval($input[1]);
$fuelEconomy = floatval($input[2]);
$car = new Car($speed, $fuel, $fuelEconomy);
while (true) {
    $commands = explode(" ", fgets(STDIN));
    if (trim($commands[0]) == "END") {
        break;
    } else if (trim($commands[0]) == "Travel") {
        $car->travel(floatval($commands[1]));
    } else if (trim($commands[0]) == "Refuel") {
        $car->reFuel(floatval($commands[1]));
    } else if (trim($commands[0]) == "Distance") {
        $car->printDistance();
    } else if (trim($commands[0]) == "Time") {
        $car->printTime();
    } else if (trim($commands[0]) == "Fuel") {
        $car->printFuel();
    }
}