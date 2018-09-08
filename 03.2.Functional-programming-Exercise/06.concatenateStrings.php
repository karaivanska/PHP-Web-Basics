<?php
/*
Write a script which will contain a function (might be recursive)
held in the variable $concatLongStr that concatenates strings that
are longer than $minLen characters.
 */

$input = [
    'Hello ', 'there.',
    'This is just another long string',
    'that would pass the check.', ' but',
    ' this', ' will',' not', 'pass it.'
];

$above = 20;

$output = array_reduce(
    $input,
    function ($carry, $item) use ($above){

        if(strlen($item) > $above){
            $carry .= $item;
            return $carry;
        } else {
            return  $carry;
        }
    });

print_r($output);