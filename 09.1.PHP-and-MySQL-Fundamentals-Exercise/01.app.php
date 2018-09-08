<?php

include 'db_confiig.php';
include '01.Employee.php';

$input = readline();
$data = explode(',',$input);

if(count($data) < 6){
    echo 'Error: Please, check your input syntax.';
    return;
}

$employee = new Employee($data[0],$data[1],$data[2],$data[3],$data[4],$data[5]);

if($employee->exist($db)){
    echo 'Error: This employee already exists.';
    return;
}

$employee->insertEmployee($db);