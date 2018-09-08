<?php
/*
You are the owner of a courier company and want to make a system for
tracking your cars and their cargo. Define a class Car that holds
information about model, engine, cargo and a collection of exactly 4
tires. The engine, cargo and tire should be separate classes, create
a constructor that receives all information about the Car and creates
and initializes its inner components (engine, cargo and tires).
On the first line of input you will receive a number N - the amount
of cars you have, on each of the next N lines you will receive
information about a car in the format “<Model> <EngineSpeed> <EnginePower>
<CargoWeight> <CargoType> <Tire1Pressure> <Tire1Age> <Tire2Pressure>
<Tire2Age> <Tire3Pressure> <Tire3Age> <Tire4Pressure> <Tire4Age>” where
the speed, power, weight and tire age are integers, tire pressure is a
double. After the N lines you will receive a single line with one of 2
commands “fragile” or “flamable” , if the command is “fragile” print
all cars whose Cargo Type is “fragile” with a tire whose pressure is
< 1, if the command is “flamable” print all cars whose Cargo Type is
“flamable” and have Engine Power > 250. The cars should be printed in
order of appearing in the input.
 */

class Car
{
    private $model;
    private $engine;
    private $cargo;
    private $tires;

    public function __construct(string $model, Engine $engine, Cargo $cargo, array $tires)
    {
        $this->model = $model;
        $this->engine = $engine;
        $this->cargo = $cargo;
        $this->tires = $tires;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getCargo(): Cargo
    {
        return $this->cargo;
    }

    public function getEngine(): Engine
    {
        return $this->engine;
    }

    public function getTires(): array
    {
        return $this->tires;
    }
}

class Engine
{
    private $engineSpeed;
    private $enginePower;

    public function __construct($engineSpeed, $enginePower)
    {
        $this->engineSpeed = $engineSpeed;
        $this->enginePower = $enginePower;
    }

    public function getSpeed()
    {
        return $this->engineSpeed;
    }

    public function getPower()
    {
        return $this->enginePower;
    }
}

class Cargo
{
    private $cargoWeight;
    private $cargoType;

    public function __construct(int $cargoWeight, string $cargoType)
    {
        $this->cargoWeight = $cargoWeight;
        $this->cargoType = $cargoType;
    }

    public function getWeight(): int
    {
        return $this->cargoWeight;
    }

    public function getType(): string
    {
        return $this->cargoType;
    }
}

class Tires
{
    private $pressure;
    private $age;

    public function __construct(float $pressure, int $age)
    {
        $this->pressure = $pressure;
        $this->age = $age;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getPressure(): float
    {
        return $this->pressure;
    }
}

$carsData = array();
$n = intval(trim(fgets(STDIN)));

for ($i = 0; $i < $n; $i++) {
    $input = explode(' ', trim(fgets(STDIN)));
    $model = trim($input[0]);
    $engineSpeed = intval($input[1]);
    $enginePower = intval($input[2]);
    $engine = new Engine($engineSpeed, $enginePower);
    $cargoWeight = intval($input[3]);
    $cargoType = trim($input[4]);
    $cargo = new Cargo($cargoWeight, $cargoType);
    $tirePressure1 = floatval($input[5]);
    $tireAge1 = intval($input[6]);
    $tire1 = new Tires($tirePressure1, $tireAge1);
    $tirePressure2 = floatval($input[7]);
    $tireAge2 = intval($input[8]);
    $tire2 = new Tires($tirePressure2, $tireAge2);
    $tirePressure3 = floatval($input[9]);
    $tireAge3 = intval($input[10]);
    $tire3 = new Tires($tirePressure3, $tireAge3);
    $tirePressure4 = floatval($input[11]);
    $tireAge4 = intval($input[12]);
    $tire4 = new Tires($tirePressure4, $tireAge4);
    $tires = array($tire1, $tire2, $tire3, $tire4);
    $data = new Car($model, $engine, $cargo, $tires);
    $carsData[$model] = $data;
}

$command = trim(fgets(STDIN));
$result = array();

foreach ($carsData as $car) {
    $fragile = 1;

    if ($car->getCargo()->getType() == $command) {
        if ($command == 'fragile') {
            foreach ($car->getTires() as $tire) {
                if ($tire->getPressure() < $fragile) {
                    echo $car->getModel() . "\n";
                    break;
                }
            }
        } else if ($command == 'flamable') {
            if ($car->getPower() > 250) {
                echo $car->getModel() . "\n";
                break;
            }
        }
    }
}
