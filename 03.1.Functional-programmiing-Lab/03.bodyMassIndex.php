<?php
/*
Calculate the Body Mass Index (BMI) which is  weight, kg / (height, m * height, m).
The input array consists of an subarray of name, weight and a height.
The output should be single dimension array.
 */

$people = [
    [ 'name' => 'John'  , 'weight' => 69, 'height'  => 1.69 ],
    [ 'name' => 'Peter' , 'weight' => 85, 'height'  => 1.68 ],
    [ 'name' => 'Ivan'  , 'weight' => 75, 'height'  => 1.72 ],
    [ 'name' => 'Mitko', 'weight' => 95, 'height'  => 1.70 ]
];

function bmi($person){
    $weight = $person['weight'];
    $height = $person['height'];
    return $result = $weight / ($height * $height);

};

$result = array_map("bmi", $people);

print_r($result);