<?php
/*
Do you remember the problem about Person? Now your purpose is to create a hierarchy of classes based on Person.
Define a class Father with properties yearBirth, yearDead and name. Then define a class called Son which inherits
Person. Define a class that is called GrandSon which inherits Son. Write a method called getTimeLived() in Person
which should be inherited in all child classes. Write an overwritten method called getGenerationNum() which returns
1 for Person, 2 for Sun and 3 for GrandSon. It’s person is to show us the level in which the person is.
You have to create a hierarchy of objects that corresponds to a particular family tree.
 */

$input = array("James Strong", "1970 – 1940", 30);
$args = explode(' ', $input);
$name = $args[0];
$duringLife = explode(' - ', $args[1]);
$birth = $duringLife[0];
$death = $duringLife[1];

print_r($input);