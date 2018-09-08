<?php
/*
Your task is to implement a program that keeps track of cars and their fuel
and supports methods for moving the cars. Define a class Car that keeps track
of a car’s Model, fuel amount, fuel cost for 1 kilometer and distance traveled.
A Car’s Model is unique - there will never be 2 cars with the same model.
On the first line of the input you will receive a number N – the number of
cars you need to track, on each of the next N lines you will receive information
for a car in the following format “<Model> <FuelAmount> <FuelCostFor1km>”,
all cars start at 0 kilometers traveled.
After the N lines until the command “End” is received, you will receive a
commands in the following format “Drive <CarModel>  <amountOfKm>”, implement
a method in the Car class to calculate whether or not a car can move that
distance, if it can the car’s fuel amount should be reduced by the amount of
used fuel and its distance traveled should be increased by the amount of
kilometers traveled, otherwise the car should not move (Its fuel amount and
distance traveled should stay the same) and you should print on the console
“Insufficient fuel for the drive”. After the “End” command is received, print
each car and its current fuel amount and distance traveled in the format
“<Model> <fuelAmount>  <distanceTraveled>”, where the fuel amount should be
printed to two decimal places after the separator.
 */

class Car
{
    private $model;
    private $fuelAmount;
    private $fuelCost;
    private $distance;

    public function __construct(string $model, float $fuelAmount, float $fuelCost)
    {
        $this->model = $model;
        $this->fuelAmount = $fuelAmount;
        $this->fuelCostFor1km = $fuelCost;
        $this->distance = 0;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function travel(float $distance)
    {
        $usedFuel = round($distance * $this->fuelCost, 2);

        if ($usedFuel > round($this->fuelAmount, 2)) {
            throw new \Exception("Insufficient fuel for the drive");
        }
        $this->fuelAmount -= $usedFuel;
        $this->distance += $distance;
    }

    public function __toString(): string
    {
        return $this->model . " "
            . number_format(abs($this->fuelAmount), 2)
            . " " . $this->distance;
    }
}

$carsData = array();
$n = intval(trim(fgets(STDIN)));

for ($i = 0; $i < $n; $i++) {
    $input = explode(" ", fgets(STDIN));
    $carModel = $input[0];
    $fuelAmount = floatval($input[1]);
    $fuelCost = floatval($input[2]);
    $car = new Car($carModel, $fuelAmount, $fuelCost);
    $carsData[$carModel] = $car;
}

$input = trim(fgets(STDIN));

while ($input != 'End') {
    $commands = explode(" ", $input);

    if (count($commands) > 1) {
        $model = $commands[1];
        $amountOfKm = floatval($commands[2]);
        $car = $carsData[$model];

        try {
            $car->travel($amountOfKm);
        } catch (\Exception $e) {
            echo $e->getMessage() . PHP_EOL;
        }
    }

    $input = trim(fgets(STDIN));
}
foreach ($carsData as $car) {
    echo $car . PHP_EOL;
}

//print_r($carsData);