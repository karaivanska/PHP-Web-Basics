<?php
/*
Define two classes Car and Engine. A Car has a model, engine, weight and
color. An Engine has model, power, displacement and efficiency. A Car’s
weight and color and its Engine’s displacements and efficiency are optional.
On the first line you will read a number N which will specify how many lines
of engines you will receive, on each of the next N lines you will receive
information about an Engine in the following format “<Model> <Power>
<Displacement> <Efficiency>”. After the lines with engines, on the next line y
ou will receive a number M – specifying the number of Cars that will follow,
on each of the next M lines information about a Car will follow in the following
format “<Model> <Engine> <Weight> <Color>”, where the engine in the format
will be the model of an existing Engine. When creating the object for a Car,
you should keep a reference to the real engine in it, instead of just the
engine’s model, note that the optional properties might be missing from the
formats. Your task is to print each car (in the order you received them) and
its information in the format defined bellow, if any of the optional fields
has not been given print “n/a” in its place instead:
<CarModel>:
  <EngineModel>:
    Power: <EnginePower>
    Displacement: <EngineDisplacement>
    Efficiency: <EngineEfficiency>
  Weight: <CarWeight>
  Color: <CarColor>
 */

class Car
{
    private $modelCar;
    private $engine;
    private $weight;
    private $color;

    public function __construct($modelCar, $modelEngine, $power, $displacement, $efficiency, $weight, $color)
    {
        $this->modelCar = $modelCar;
        $this->engine = new Engine($modelEngine, $power, $displacement, $efficiency);
        $this->weight = $weight;
        $this->color = $color;
    }

    public function __toString()
    {
        $out = '';
        $out .= $this->modelCar . ":" . "\n";
        $out .= $this->engine;
        $out .= "  Weight: " .$this->weight . "\n";
        $out .= "  Color: ".$this->color  . "\n";

        return $out;
    }

    public function getModelCar()
    {
        return $this->modelCar;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getColor()
    {
        return $this->color;
    }
}

class Engine
{
    private $modelEngine;
    private $power;
    private $displacement;
    private $efficiency;

    public function __construct($modelEngine, $power, $displacement, $efficiency)
    {
        $this->modelEngine = $modelEngine;
        $this->power = $power;
        $this->displacement = $displacement;
        $this->efficiency = $efficiency;
    }

    public function __toString()
    {
        $out = '';
        $out .= "  ". $this->modelEngine;
        $out .= "    Power: ".$this->power;
        $out .= "    Displacement: " . $this->displacement;
        $out .= "    Efficiency: ".$this->efficiency;

        return $out;
    }

    public function getModelEngine()
    {
        return $this->modelEngine;
    }

    public function getPower()
    {
        return $this->power;
    }

    public function getDisplacement()
    {
        return $this->displacement;
    }

    public function getEfficient()
    {
        return $this->efficiency;
    }
}

$n = intval(trim(fgets(STDIN)));
$carsData = array();

for ($i = 0; $i < $n; $i++) {
    $input = explode(' ', trim(fgets(STDIN)));
    $model = trim($input[0]);
    $power = intval($input[1]);
    $displacement = 'n/a';
    $efficiency = 'n/a';

    if (count($input) > 3) {
        $displacement = $input[2];
        $efficiency = $input[3];

    } else if (count($input) > 2) {
        if (is_numeric($input[2])) {
            $displacement = $input[2];
        } else {
            $efficiency = $input[2];
        }
    }
    $data = new Engine($model, $power, $displacement, $efficiency);
    $carsData[$model] = $data;
}

$m = intval(fgets(STDIN));
$data = [];
$carsData2 = [];
$enginesData = [];

for ($i = 0; $i < $m; $i++) {
    $input = explode(' ', trim(fgets(STDIN)));
    $modelCar = trim($input[0]);
    $modelEngine = trim($input[1]);
    $weight = 'n/a';
    $color = 'n/a';
    $engModel = '';
    $engPower = 0;
    $engDiscplacement = 0;
    $engEffic = 0;

    foreach ($carsData as $car) {
        if ($modelEngine == $car->getModelEngine()) {
            $engModel = $car->getModelEngine() . ":" . "\n";
            $engPower = $car->getPower() . "\n";
            $engDiscplacement = $car->getDisplacement() . "\n";
            $engEffic = $car->getEfficient() . "\n";
        }
    }

    if (count($input) > 3) {
        $weight = $input[2];
        $color = $input[3];

    } else if (count($input) > 2) {
        if (is_numeric($input[2])) {
            $weight = $input[2];
        } else {
            $color = $input[2];
        }
    }
    $data = new Car($modelCar, $engModel, $engPower, $engDiscplacement, $engEffic, $weight, $color);
    $carsData2[$modelCar] = $data;
}

foreach ($carsData2 as $car) {
    echo $car;
}
