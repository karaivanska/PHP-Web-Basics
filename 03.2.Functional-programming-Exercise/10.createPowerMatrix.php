<?php
/*
Create a matrix out of a single dimensional array in which every new row
consists of the first row on the power of the Number of row. Use a single
recursive function to do this.
 */

$input = [1, 2, 2, 4];

$powElements = function ($arr, $i){
    $powedElements = [];

    foreach ($arr as $value) {
        $element = pow($value, $i);
        array_push($powedElements, $element);
    }

    return $powedElements;
};

$getArr = function (&$getArr, $input, $i=1, $n=4, $matrix = []) use ($powElements){

    if($i <= $n){
        $matrix[] = $powElements($input, $i);
        return $getArr($getArr, $input, $i+1, $n, $matrix);

    } else {
        return $matrix;
    }
};

$matrix = $getArr($getArr, $input);
print_r($matrix);


