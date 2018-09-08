<?php
/*
 Read a list of real numbers with fgets(STDIN) and print
 them in ascending order along with their number of occurrences.
 */
$inputNums = trim(fgets(STDIN));
$numbersArr = explode(' ', $inputNums);
$newArr = [];

foreach ($numbersArr as $number) {
    if(!array_key_exists($number, $newArr)){
        $newArr[$number] = 1;
    } else {
        $newArr[$number]++;
    }
}
ksort($newArr);

foreach ($newArr as $key => $value) {
    echo $key . ' -> ' . $value . ' times' . "\n";
}