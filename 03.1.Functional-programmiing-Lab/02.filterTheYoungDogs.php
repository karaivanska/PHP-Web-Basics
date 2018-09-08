<?php
/*
Write a new filtering function and store it in the variable
$youngDogs. Filter all dogs younger than 11.index.php years.
 */

$animals = [
    [ 'name' => 'Waffles', 'type' => 'dog', 'age'  => 12],
    [ 'name' => 'Fluffy', 'type' => 'cat', 'age'  => 14],
    [ 'name' => 'Spelunky', 'type' => 'dog', 'age'  => 4],
    [ 'name' => 'Hank', 'type' => 'dog', 'age'  => 11],
];

$youngDogs = array_filter($animals, function ($item){
    return ($item['type'] == 'dog' && $item['age'] < 10);
});

print_r($youngDogs);