<?php
/*
 You are asked to model an application for storing data about people. You should be able to have a person and a child. The child is derived of the person. Your task is to model the application. The only constraints are:
•	Person – represents the base class by which all others are implemented
o	People should not be able to have negative age
•	Child - represents a class which is derived by the class Person.
o	Children should not be able to have age greater than 15

 */

include '03.Person.php';
include '03.Child.php';

$input = trim(fgets(STDIN));

while($input != 'STANDARD' || $input != 'GOLD'){
     $args = explode(' ', $input);
     $name = $args[0];
     $age = $args[1];

     $person = new Person($name, $age);
     echo $person->getName() . PHP_EOL;
     echo $person->getAge() . PHP_EOL;

     $kid = new Child($name, $age);
     echo $kid->getName() . PHP_EOL;
     echo $kid->getAge() . PHP_EOL;

    $input = trim(fgets(STDIN));
}