<?php
/*
Extend the code of the function in $bmiCalc to return an array
that holds the names of the people and be two dimensional.
 */

$people = [
    ['name' => 'John', 'weight' => 69, 'height' => 1.69],
    ['name' => 'Peter', 'weight' => 85, 'height' => 1.68]
];

function bmi($person)
{
    $weight = $person['weight'];
    $height = $person['height'];
    return $results = $weight / ($height * $height);
}

$results = array_map("bmi", $people);
$bmiEndResult = [[]];

for ($i = 0; $i < count($people); $i++) {
    $currentPerson = $people[$i];

    for ($k = 0; $k < count($results); $k++) {
        $currentResult = $results[$k];

        if ($i == $k) {

            if (!array_key_exists('name', $bmiEndResult)) {
                $bmiEndResult[$i]['name'] = $currentPerson['name'];
            }
            if (!array_key_exists('bmi', $bmiEndResult)) {
                $bmiEndResult[$i]['bmi'] = $currentResult;
            }
        }
    }
}
print_r($bmiEndResult);



