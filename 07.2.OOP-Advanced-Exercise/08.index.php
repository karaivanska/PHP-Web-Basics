<?php

/**
 * Created by PhpStorm.
 * User: karai
 * Date: 14-May-18
 * Time: 13:54
 */
interface iBuyer
{
    public function buyFood();
}

interface iBirthdate
{
    public function getBirthDate();
}

include '07.Citizenss.php';
include '07.Pets.php';
include '07.Robotss.php';
include '08.Rebel.php';

$n = readline();
$citizens = array();
$people = array();
$foods = array();
$rebels = array();
$people = array();

for ($i = 0; $i < $n; $i++) {
    $input = explode(' ', readline());

    if (count($input) == 3) {
        $rebel_name = strval($input[0]);
        $rebel_age = intval($input[1]);
        $rebel_group = strval($input[2]);

        $rebel = new Rebel($rebel_name, $rebel_age, $rebel_group);
        $people[$rebel_name] = $rebel;

    } elseif (count($input) == 4) {
        $citizen_name = strval($input[0]);
        $citizen_age = intval($input[1]);
        $citizen_id = intval($input[2]);
        $citizen_birth = strval($input[3]);

        $citizen = new Citizenss($citizen_name, $citizen_age, $citizen_id, $citizen_birth);
        $people[$citizen_name] = $citizen;
    }
}

$input = readline();

while ($input != 'End') {

    if (array_key_exists($input, $people)) {
        $person = $people[$input];
        $person->buyFood();
        $foods[$input] += $person->buyFood();
    }

    $input = readline();
}

echo array_sum($foods) . ' units food';