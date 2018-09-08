<?php
/*
Create a hierarchy of Animals. Your task is simple: there should be a base class which all
others derive from. Your program should have 3 different animals – Dog, Frog and Cat. Let’s
go deeper in the hierarchy and create two additional classes – Kitten and Tomcat. Kittens
are female and Tomcats are male! We are ready now, but the task is not complete. Along with
the animals, there should be a class which classifies its derived classes as sound
producible. You may guess that all animals are sound producible. The only one mandatory
functionality of all sound producible objects is to produceSound(). For instance, the dog
should bark. Your task is to model the hierarchy and test its functionality. Create an animal
of all kinds and make them produce sound. On the console, you will be given some lines of
code. Each two lines of code, represents animals and their names, age and gender. On the
first line there will be the kind of animal, you should instantiate. And on the next line,
you will be given the name, the age and the gender. Stop the process of gathering input,
when the command “Beast!” is given.
*/

include '07.Animals.php';
include '07.Cat.php';
include '07.Dog.php';
include '07.Frog.php';
include '07.Kitten.php';

$input = trim(fgets(STDIN));

while ($input != 'Beast!') {
    $animal = '';

    $animal = $input;
    $input = trim(fgets(STDIN));

    $args = explode(' ', $input);

    $name = trim($args[0]);
    $age = trim($args[1]);
    $gender = trim($args[2]);

    $a = new Animals($name, $age, $gender);

    try {
        if ($animal == 'Cat') {
            echo $animal . " " . $a . PHP_EOL;

            $cat = new Cat($name, $age, $gender);
            echo $cat->produceSound() . PHP_EOL;

        } elseif ($animal == 'Dog') {
            echo $animal . " " . $a . PHP_EOL;

            $dog = new Dog($name, $age, $gender);
            echo $dog->produceSound();

        } elseif ($animal == 'Frog') {
            echo $animal . " " . $a . PHP_EOL;

            $frog = new Frog($name, $age, $gender);
            echo $frog->produceSound();

        } elseif ($animal == 'Kitten') {
            echo $animal . " " . $a . PHP_EOL;

            $kitten = new Kitten($name, $age, $gender);
            echo $kitten->produceSound();

        } elseif ($animal == 'Tomcat') {
            echo $animal . " " . $a . PHP_EOL;

            $tomcat = new Tomcat($name, $age, $gender);
            echo $tomcat->produceSound();

        } else {
            throw new Exception('Not implemented!');
        }

        $input = trim(fgets(STDIN));

    } catch (Exception $e) {
        echo $e->getMessage();
        return;
    }
}