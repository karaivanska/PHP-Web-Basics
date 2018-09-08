<?php
/*
Your task is to create a class hierarchy like the picture below. All the classes except
Vegetable, Meat, Mouse, Tiger, Cat & Zebra should be abstract.
Input should be read from the console. Every even line will contain information about
the Animal in following format:
{AnimalType} {AnimalName} {AnimalWeight} {AnimalLivingRegion} [{CatBreed} = Only if its
cat] On the odd lines you will receive information about the food that you should give
to the Animal. The line will consist of FoodType and quantity separated by a whitespace.
You should build the logic to determine if the animal is going to eat the provided food.
The Mouse and Zebra should check if the food is a Vegetable. If it is they will eat it.
Otherwise you should print a message in the format:
{AnimalType} are not eating that type of food!
Cats eat any kind of food, but Tigers accept only Meat. If Vegetable is provided to a
tiger message like the one above should be printed on the console.
{AnimalType} [{AnimalName}, {CatBreed}, {AnimalWeight}, {AnimalLivingRegion}, {FoodEaten}]
Print all AnimalWeight with no trailing zeroes after the decimal separator.
After you read information about the Animal and Food then invoke makeSound method of the
current animal and then feed it. At the end print the whole object and proceed reading
information about the next animal/food. The input will continue until you receive “End”
for animal information.
 */

include '03.Animal.php';
include '03.Mammal.php';
include '03.Food.php';
include '03.Vegetable.php';
include '03.Meat.php';
include '03.Cat.php';
include '03.Mouse.php';


$input = explode(' ', readline());
$animalBreed = null;
$counter = 2;

while ($input[0] != 'End') {
    try {
        if ($counter % 2 == 0) {
            $animalType = $input[0];
            $animalName = $input[1];
            $animalWeight = doubleval($input[2]);
            $animalRegion = $input[3];

            if ($animalType == 'Cat') {
                $animalBreed = $input[4];
                $cat = new Cat($animalName, $animalType, $animalWeight, $animalRegion, $animalBreed);
                echo $cat->getSound();
                echo $cat;

            } elseif ($animalType == 'Mouse') {
                $mouse = new Mouse($animalName, $animalType, $animalWeight, $animalRegion);
                echo $mouse->getSound();

                echo $mouse;

            } elseif ($animalType == 'Zebra') {

            }
        } else {
            $foodType = $input[0];
            $foodQuantity = doubleval($input[1]);

            if ($foodType == 'Vegetable') {
                $food = new Vegetable($foodType, $foodQuantity);

            }


        }

        $counter++;
        $input = explode(' ', readline());

    } catch (Exception $e){
        echo $e->getMessage();
    }
}



