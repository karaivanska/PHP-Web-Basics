<?php
/*
1.	Create Anonymous Object with few properties by your choice and
populate with values.
2.	Print all properties with foreach like - {name}->{value).
 */

$cars = new stdClass();
$cars->brand = 'Renault';
$cars->model = 'Clio';
$cars->year = 2000;
$cars->engine = 'VEE';
$cars->seats = 4;
$cars->power = 160;

foreach ($cars as $key => $value) {
    echo "$key is $value\n";
}
