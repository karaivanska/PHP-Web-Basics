<?php
/**You are given an n number of chemical elements.
 * You need to keep track of all elements and
 * at the end print all unique ones.*/

$elements = 'Ce, O, Mo, O, Ce, Ee, Mo';
$inputArr = explode(', ', $elements);
$result = [];

foreach (array_count_values($inputArr) as $key => $value){
    if($value == 1){
        array_push($result, $key);
    }
}
print_r($result);
