<?php

include '03.db_config.php';
include '03.Employee.php';

try {
    $input = readline();
    $args = explode(',', $input);
    $data = array_map('trim', $args);

    /*if(count($data) < 5 || $data[3] != 'phones'){
        throw new Exception("Error: invalid input");
    } */

    $phone_data = explode('phones, ', $input);
    $names = $phone_data[0];
    $employee = null;
    /*if(strpos($phone_data[1], '@')){
         throw new Exception("Error: Please, check your input phone number syntax.");
     }*/

    if (count($data) == 3) {
        $employee = new Employeee($data[0], $data[1], $data[2]);
    } else if (count($data) == 4) {
        $employee = new Employeee($data[0], $data[1], $data[2], $data[3]);
    }

    if ($data[0] == 'Info') {
        $name = rtrim($data[1],"*");
        $employees = $employee->getInfo($db, $name);

        foreach ($employees as $empl) {
            echo implode(', ', $empl) . PHP_EOL;
        }
        return;
    }

    $employee->insertEmployee($db);
    $phone_data = $phone_data[1];
    $phone_data = explode(', ', $phone_data);

    /*if(count($data) == 6){
         $employee->insertCountry($db, $data[7]);
     }*/

    foreach ($phone_data as $single_phone) {
        $phone = explode(':', $single_phone);
        $employee_data = $employee->getEmployee($db);

        if (!$employee_data || count($employee_data) > 1) {
            $ids = array();

            foreach ($employee->getEmployee($db) as $single_employee) {
                $ids[] = $single_employee['id'];
            }
            throw new Exception ("Employees with this name: " . implode(', ', $ids));
        }
        $employee->createPhone($db, $phone[1], $phone[0], $employee_data[0]['id']);

        if ($employee->exist($db)) {
            $string = str_replace(',', ' ', $names);
            throw new Exception("Phones of $string saved.");
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
}