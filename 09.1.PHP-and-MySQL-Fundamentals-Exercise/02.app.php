<?php

include '02.db_config.php';
include '02.Employee.php';

try{
    $input = readline();
    $args = explode(',',$input);
    $data = array_map('trim',$args);
    //var_dump($data);

    if(count($data) < 5 || $data[3] != 'emails'){
        throw new Exception("Error: invalid input");
    }

    $email_data = explode('emails, ', $input);
    if(is_numeric($email_data[1])){
        throw new Exception("Error: Please, check your input email syntax.");
    }

    $employee = new Employees($data[0], $data[1], $data[2]);
    $employee->insertEmployee($db);
    $email_data = $email_data[1];
    $email_data = explode(', ', $email_data);

    foreach ($email_data as $single_email){
        $email = explode(': ', $single_email);
        $employee_data = $employee->getEmployee($db);

        if(!$employee_data || count($employee_data) > 1){
            $ids = array();

            foreach ($employee->getEmployee($db) as $single_employee){
                $ids[] = $single_employee['id'];
            }
            throw new Exception ("Employees with this name: ".implode(', ', $ids));
        }

        $employee->createEmail($db, $email[0], $email[1], $employee_data[0]['id']);
    }

}catch(Exception $e){
    echo $e->getMessage();
}
