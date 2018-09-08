<?php
/*Read towns and incomes (like shown below)
and print an array holding the total income
for each town (see below). Print the towns in
their natural order as object properties.*/

$arr = ['Sofia','20', 'Varna','10', 'Sofia','5'];
$sums = [];
for ($i = 0; $i < count($arr); $i += 2) {

    $town = $arr[$i];
    $income = $arr[$i+1];

    if (!isset($sums[$town])){
        $sums[$town] = $income;
    }else {
        $sums[$town] += $income;
    }
}
print_r($sums);
