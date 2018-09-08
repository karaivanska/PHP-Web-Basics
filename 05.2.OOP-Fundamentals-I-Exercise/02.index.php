<?php
/*
Create two classes: class Person and class Product. Each person should
have a name, money and a bag of products. Each product should have name
and cost. Name cannot be an empty string. Money cannot be a negative number.
Create a program in which each command corresponds to a person buying a
product:
•	If the person can afford a product add it to his bag.
•	If a person doesn’t have enough money, print an appropriate message
("[Person name] can't afford [Product name]").
On the first two lines you are given all people and all products. Next
you will be given all purchases people made until END is reached. Print
a message when someone makes a purchase. After all purchases print every
person in the order of appearance and all products that he has bought
also in order of appearance. If nothing is bought, print the name of the
person followed by "Nothing bought".
In case of invalid input (negative money exception message: "Money cannot
be negative") or empty name: (empty name exception message "Name cannot
be empty") break the program with an appropriate message. See the examples
below:
 */

$input = trim(fgets(STDIN));
$count = 0;

include '02.Person.php';
include '02.Product.php';

$people = [];
$products = [];

while ($input != 'END') {

    if ($count == 0) {
        $arrayOfNames = array_filter(explode(';', $input));

        for ($i = 0; $i < count($arrayOfNames); $i++) {
            $args = explode('=', $arrayOfNames[$i]);
            $name = $args[0];
            $money = $args[1];

            $people[] = new Person($name, $money);
        }

    } else if ($count == 1) {
        $arrayOfProducts = array_filter(explode(';', $input));

        for ($i = 0; $i < count($arrayOfProducts); $i++) {
            $args = explode('=', $arrayOfProducts[$i]);
            $productName = $args[0];
            $cost = $args[1];

            $products[] = new Product($productName, $cost);
        }

    } else {
        $arr = array_filter(explode(' ', $input));
        $personName = $arr[0];
        $purchasedProduct = $arr[1];

        foreach ($products as $product) {
            
        }


    }


    $count++;
    $input = trim(fgets(STDIN));
}

print_r($products);
