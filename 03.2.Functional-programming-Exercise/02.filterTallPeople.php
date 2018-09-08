<?php
/*
Write a PHP script FilterPeople.php that uses array_filter()
built-in function to filter all who are taller than 1.80
height is in meters). The input should be hard-coded inside
$people as a two dimensional array. The output should be
printed by print_r.
 */

$people = [
    ['name'=> 'John'  , 'height'=> 1.65],
    ['name'=> 'Peter' , 'height'=> 1.85],
    ['name'=> 'Silvia', 'height'=> 1.69],
    ['name'=> 'Martin', 'height'=> 1.82]
];

$result = array_filter($people, 'tall');

function tall($person){
    return $person['height'] > 1.80;
}

print_r($result);
