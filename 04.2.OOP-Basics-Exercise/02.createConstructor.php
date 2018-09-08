<?php
/*
Add constructor to the Person class from the last task:
1.	It should accept a string for the name and an integer
for the age and should produce a person with the given name
and age.
 */

class Person{
    public $name;
    public $age;

    function __construct(string $name, int $age)
    {
       $this->name=$name;
       $this->age=$age;
    }

    function __toString()
    {
       return $this->name . " " . $this->age;
    }
}

$name = trim(fgets(STDIN));
$age = intval(fgets(STDIN));
$persons = new Person($name, $age);
echo $persons;
