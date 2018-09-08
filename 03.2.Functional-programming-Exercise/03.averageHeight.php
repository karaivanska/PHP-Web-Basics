<?php
/*
Extend the previous script FilterPeople.php with a new piece
of code which calculates the average height of all people by
using the built-in function array_reduce(). The input is the
same as in Problem 2. Return the output from array_reduce()
in the variable $averageHeight and echo it.
 */

$people = [
    ['name'=> 'John'  , 'height'=> 1.65],
    ['name'=> 'Peter' , 'height'=> 1.85],
    ['name'=> 'Silvia', 'height'=> 1.69],
    ['name'=> 'Martin', 'height'=> 1.82]
];

function height($person){
    $height = $person['height'];

    return $result = $height / count($person);

};

$result = array_map("height", $people);

function heightAvg($result) {
    $carry = null;
    $count = count($result);

    return array_reduce($result, function ($carried, $value) use ($count) {
        return ($carried === null ? 0 : $carried) + $value / $count;
    }, $carry);
}

$filter = function ($people) {
    return heightAvg(array_column($people,"height"));
};

echo "Average height is " . $filter($people) . " meters.";
