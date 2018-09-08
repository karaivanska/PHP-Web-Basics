<?php
/*
A supermarket has products which have quantities. Your task
is to stock the shop before Exam Sunday. Until you receive
the command “shopping time”, add the various products to
the shop’s inventory, keeping track of their quantity
(for inventory purposes). When you receive the aforementioned
command, the students start pouring in before the exam and
buy various products. The format for stocking a product
is: “stock $product $quantity”. The format for buying a product
is: “buy $product $quantity”. If a student tries to buy a product,
which doesn’t exist, print “$product doesn't exist”. If it does
exist, but it’s out of stock, print “$product out of stock”.
If a student tries buying more than the quantity of that product,
sell them all the quantity of the product (the product is left
out of stock, don’t print anything). When you receive the command
 “exam time”, your task is to print the remaining inventory in
the following format: “product -> quantity”. If a product is
out of stock, do not print it.
 */

$input = trim(fgets(STDIN));
$stockedProducts = [];
$isOutOfStock = false;

while ($input != "shopping time") {
    $args = explode(' ', $input);
    $product = $args[1];
    $quantity = intval($args[2]);

    if (!array_key_exists($product, $stockedProducts)) {
        $stockedProducts[$product] = $quantity;
    } else {
        $stockedProducts[$product] += $quantity;
    }

    $input = trim(fgets(STDIN));
}

$input = trim(fgets(STDIN));

while ($input != "exam time") {
    $args = explode(' ', $input);
    $product = $args[1];
    $quantity = intval($args[2]);


    if (!array_key_exists($product, $stockedProducts)) {
        echo "$product doesn't exist\n";

    } else if (array_key_exists($product, $stockedProducts) && $stockedProducts[$product] == 0) {
        echo "$product out of stock\n";

    } else if (array_key_exists($product, $stockedProducts) && $stockedProducts[$product] > 0) {
        $stockedProducts[$product] -= $quantity;

        if ($stockedProducts[$product] < 0) {
            $stockedProducts[$product] = 0;
            $isOutOfStock = true;
        }
    }

    $input = trim(fgets(STDIN));
}

foreach ($stockedProducts as $product => $quantity) {
    if ($quantity != 0) {
        echo "$product -> $quantity\n";
    }
}

