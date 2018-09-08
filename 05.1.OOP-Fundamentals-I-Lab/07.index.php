<?php

include 'Vehicle.php';
include 'Car.php';

$myCar = new Car(4, "Red", "Audi", "Quatro", 2008);
$myCar->paint("Yellow");
print_r($myCar);