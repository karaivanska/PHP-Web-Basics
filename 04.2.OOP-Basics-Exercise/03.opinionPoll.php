<?php
/*
Using the Person class, write a program that reads from the
console N lines of personal information and then prints all
people whose age is more than 30 years, sorted in alphabetical
order.
 */

class Person
{
    private  $name;
    private $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __toString()
    {
        return "$this->name $this->age";
    }

    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }
}

$n = intval(fgets(STDIN));
$persons = [];

for ($i = 0; $i < $n; $i++) {
    $input = explode(' ', fgets(STDIN));
    $name = trim($input[0]);
    $age = intval($input[1]);
    $check = checkAge($age);

    if($check){
        $person = new Person($name, $age);
        $persons[] = $person;
    }
}

function checkAge($age){
    return $age > 30;
}

usort($persons, function ($a, $b){
    return strcmp($a->getName(), $b->getName());
});

foreach ($persons as $person) {
    echo "$person\n";
}