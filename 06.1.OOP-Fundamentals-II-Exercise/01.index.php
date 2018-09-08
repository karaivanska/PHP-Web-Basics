<?php
/*
Write a program that models 2 vehicles (Car and Truck) and will be able to simulate driving and
refueling them. Car and truck both have fuel quantity, fuel consumption in liters per km and can
be driven given distance and refueled with given liters. But in the summer both vehicles use air
conditioner and their fuel consumption per km is increased by 0.9 liters for the car and with 1.6
liters for the truck. Also the truck has a tiny hole in his tank and when it gets refueled it gets
only 95% of given fuel. The car has no problems when refueling and adds all given fuel to its tank.
If vehicle cannot travel given distance its fuel does not change.
 */

$car_arr = explode(' ', readline());
$car = $car_arr[0];
$fuelCar = floatval($car_arr[1]);
$littersCar = floatval($car_arr[2]);
$vehicle_car = new Car($car, $fuelCar, $littersCar);

$truck_arr = explode(' ', readline());
$truck = $truck_arr[0];
$fuelTruck = $truck_arr[1];
$littersTruck = $truck_arr[2];
$vehicle_truck = new Truck($truck, $fuelTruck, $littersTruck);

$n = readline();

$car_distance = 0;
$truck_distance = 0;
$car_fuel = 0;
$truck_fuel = 0;
$checkFuel = 0;

for($i = 0; $i < $n; $i++){

   $input = explode(' ', readline());
   $command = $input[0];
   $vehicle = $input[1];
   $distance = floatval($input[2]);

   if($command == 'Drive' && $vehicle == 'Car'){
       $car_fuel = $distance * $vehicle_car->getLitters();
       $checkFuel = $vehicle_car->getFuel() - $car_fuel;

       if($distance <= $checkFuel ){
           echo 'Car travelled ' . $distance . ' km' . PHP_EOL;
           $car_distance = $vehicle_car->getFuel() - $car_fuel;
           //$vehicle_car->setFuel($car_distance);

       }else {
           echo 'Car needs refueling' . PHP_EOL;
       }
   }elseif($command == 'Drive' && $vehicle == 'Truck'){
       $truck_fuel = $distance * $vehicle_car->getLitters();
       $checkFuel = $vehicle_truck->getFuel() - $car_fuel;

       if($distance <= $checkFuel){
           echo 'Truck travelled ' . $distance . ' km' . PHP_EOL;
           $truck_distance = $vehicle_truck->getFuel() - $truck_fuel;
           //$vehicle_truck->setFuel($truck_distance);

       } else {
           echo 'Truck needs refueling' . PHP_EOL;
       }
   } else if($command == 'Refuel' && $vehicle == 'Car'){
           $vehicle_car->setFuel($distance);
   }
   //echo $car_distance . PHP_EOL;
    //print_r($vehicle_car);
   // print_r($vehicle_truck);*/
}

abstract class Vehicle{

    protected $vehicle;
    protected $fuelQuantity;
    protected $littersPerKm;

    public function __construct($vehicle, $fuelQuantity, $littersPerKm)
    {
        $this->vehicle=$vehicle;
        $this->fuelQuantity=$fuelQuantity;
        $this->littersPerKm=$littersPerKm;
    }

    abstract public function setFuel($distance);
    abstract public function getFuel();
    abstract public function getLitters();
    abstract public function __toString();

}

class Car extends Vehicle {

    public function setFuel($distance)
    {
        $this->fuelQuantity += $distance;
    }
    public function getFuel()
    {
      return $this->fuelQuantity;
    }

    public function getLitters()
    {
       return $this->littersPerKm;
    }

    public function __toString()
    {
        return $this->vehicle . " " . $this->fuelQuantity . PHP_EOL;
    }
}

class Truck extends Vehicle {

    public function setFuel($distance)
    {
        $this->fuelQuantity += $distance;
    }

    public function getFuel()
    {
        return $this->fuelQuantity;
    }

    public function getLitters()
    {
        return $this->littersPerKm;
    }

    public function __toString()
    {
        return $this->vehicle . " " . $this->fuelQuantity . PHP_EOL;
    }
}