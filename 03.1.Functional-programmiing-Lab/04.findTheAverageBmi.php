<?php
/*
Find the average BMI as a single number. Use array_reduce
for this. Return the value in $bmiAvg. Wrap the new code in
a function and put it into a variable $bmiCalcAvg. Echo or
print_r the result ($bmiAvg) at the end.
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

function bmiAvg($result) {
    $carry = null;
    $count = count($result);

    return array_reduce($result, function ($carried, $value) use ($count) {
        return ($carried === null ? 0 : $carried) + $value / $count;
    }, $carry);
}

$filter = function ($people) {
    return bmiAvg(array_column($people,"height"));
};

print_r($filter($people));


