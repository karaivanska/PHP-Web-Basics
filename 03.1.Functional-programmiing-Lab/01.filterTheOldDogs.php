<?php
/*
Write a simple program that receives as input a two dimensional array of data about
animals: dogs and cats.  See the example below. Use a closure and the built in
function array_filter() to filter all dogs which are at age larger than 10 years.
 */

$animals = [
    [ 'name' => 'Waffles', 'type' => 'dog', 'age'  => 12],
    [ 'name' => 'Fluffy', 'type' => 'cat', 'age'  => 14],
    [ 'name' => 'Spelunky', 'type' => 'dog', 'age'  => 4],
    [ 'name' => 'Hank', 'type' => 'dog', 'age'  => 11],
];

$filteredArr = array_filter($animals, function ($item){
    return ($item['type'] == 'dog' && $item['age'] > 10);
});

print_r($filteredArr);
