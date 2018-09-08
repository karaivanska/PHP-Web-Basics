<?php
/*
Google is always watching you, so it should come as no surprise that they know everything
about you (even your pokemon collection), since you’re really good at writing classes Google
asked you to design a Class that can hold all the information they need for people.
From the console you will receive an unkown amount of lines until the command “End” is read,
on each of those lines there will be information about a person in one of the following
formats:
•	“<Name> company <companyName> <department> <salary>”
•	“<Name> pokemon <pokemonName> <pokemonType>”
•	“<Name> parents <parentName> <parentBirthday>”
•	“<Name> children <childName> <childBirthday>”
•	“<Name> car <carModel> <carSpeed>”
You should structure all information about a person in a class with nested subclasses.
People’s names are unique - there won’t be 2 people with the same name, a person can also have
only 1 company and car, but can have multiple parents, chidlren and pokemon. After the command
“End” is received on the next line you will receive a single name, you should print all
information about that person. Note that information can change during the input, for instance
if we receive multiple lines which specify a person’s company, only the last one should be the
one remembered. The salary must be formated to two decimal places after the seperator.
 */

class Person
{
    private $name;
    private $company = null;
    private $car = null;
    private $pokemon = null;
    private $parents = null;
    private $children = null;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function setPerson(Company $company)
    {
        $this->company = $company;
    }

    public function setCar(Car $car)
    {
        $this->car = $car;
    }

    public function setCompany(Company $company)
    {
        $this->company = $company;
    }

    public function setChildren(Children $children)
    {
        $this->children = $children;
    }

    public function setParents(Parents $parents)
    {
        $this->parents = $parents;
    }

    public function setPokemon(Pokemon $pokemon)
    {
        $this->pokemon = $pokemon;
    }

    public function __toString()
    {
        return $this->name
            . PHP_EOL . 'Company:' . ($this->company ? PHP_EOL . $this->company : '')
            . PHP_EOL . 'Car:' . ($this->car ? PHP_EOL . $this->car : '')
            . PHP_EOL . 'Pokemon:' . ($this->pokemon ? PHP_EOL . $this->pokemon : '')
            . PHP_EOL . 'Parents:' . ($this->parents ? PHP_EOL . $this->parents : '')
            . PHP_EOL . 'Children:' . ($this->children ? PHP_EOL . $this->children : '');
    }
}

class Company {
    private $company;
    private $department;
    private $salary;

    public function __construct(string $company, string $department, float $salary)
    {
        $this->company = $company;
        $this->department = $department;
        $this->salary = $salary;
    }

    /*public function incrementSalary(float $dollarsPerc)
    {
        $this->salary=$this->salary + $dollarsPerc;
    } */

    public function __toString()
    {
        return $this->company . ' ' . $this->department . ' ' . number_format($this->salary, 2);
    }
}

class Car
{
    private $carModel;
    private $carSpeed;

    public function __construct(string $carModel, float $carSpeed)
    {
        $this->carModel = $carModel;
        $this->carSpeed = $carSpeed;
    }

    public function __toString()
    {
        return $this->carModel . ' ' . $this->carSpeed;
    }
}

class Pokemon
{
    private $pokemonName;
    private $pokemonType;

    public function __construct(string $pokemonName, string $pokemonType)
    {
        $this->pokemonName = $pokemonName;
        $this->pokemonType=$pokemonType;
    }

    public function __toString()
    {
        return $this->pokemonName. ' ' . $this->pokemonType;
    }
}

class Parents
{
    private $parentName;
    private $dateOfBirth;

    public function __construct(string $parentName, string $dateOfBirth)
    {
        $this->parentName = $parentName;
        $this->dateOfBirth=$dateOfBirth;
    }

    public function __toString()
    {
        return $this->parentName . ' ' . $this->dateOfBirth;
    }
}

class Children
{
    private $childrenName;
    private $dateOfBirth;

    public function __construct(string $childrenName, string $dateOfBirth)
    {
        $this->childrenName = $childrenName;
        $this->dateOfBirth=$dateOfBirth;
    }

    public function __toString()
    {
        return $this->childrenName . ' ' . $this->dateOfBirth;
    }
}

$input = trim(fgets(STDIN));
$people = [];

while ($input != 'End') {
    $args = explode(' ', $input);
    $personName = trim($args[0]);
    $person = new Person($personName);

    if ($args[1] == 'company') {
        $companyName = trim($args[2]);
        $department = trim($args[3]);
        $salary = floatval($args[4]);

        $company = new Company($companyName, $department, $salary);
        //$company->incrementSalary(20);

        if(!array_key_exists($personName, $people)){
            $person->setCompany($company);
            $people[$personName] = $person;


        } else {
            $people[$personName]->setCompany($company);
        }

    } else if ($args[1] == 'car') {
        $model = trim($args[2]);
        $speed = trim($args[3]);
        $car = new Car($model, $speed);

        if(!array_key_exists($personName, $people)){
            $person->setCar($car);
            $people[$personName] = $person;

        } else {
            $people[$personName]->setCar($car);
        }


    } else if ($args[1] == 'pokemon') {
        $pokemonName = trim($args[2]);
        $pokemonType = trim($args[3]);

        $pokemon = new Pokemon($pokemonName, $pokemonType);

        if(!array_key_exists($personName, $people)){
            $person->setPokemon($pokemon);
            $people[$personName] = $person;

        } else {
            $people[$personName]->setPokemon($pokemon);
        }

    } else if ($args[1] == 'parents') {
        $parentName = trim($args[2]);
        $parentBirth = trim($args[3]);

        $parent = new Parents($parentName, $parentBirth);

        if(!array_key_exists($personName, $people)){
            $person->setParents($parent);
            $people[$personName] = $person;

        } else {
            $people[$personName]->setParents($parent);
        }
    } else if($args[1] == 'children'){
        $childrenName = trim($args[2]);
        $childfBirth = trim($args[3]);

        $child = new Children($childrenName, $childfBirth);

        if(!array_key_exists($personName, $people)){
            $person->setChildren($child);
            $people[$personName] = $person;

        } else {
            $people[$personName]->setChildren($child);
        }
    }

    $input = trim(fgets(STDIN));
}

$personName = trim(fgets(STDIN));
echo $people[$personName];