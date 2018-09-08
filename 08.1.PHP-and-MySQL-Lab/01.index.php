<?php
/*
Create php file that get student data from standard input. First input must be
integer which indicates the number of student that must be send. Next N lines
wii be in this format <First_name> <Last_name> <Studen_number> <Phone>
None: Phone is not mandatory and can missed
All data must be saved in Database
*/

$db = new PDO('mysql:host=localhost;dbname=php-course', 'root', '****');

$n = readline();

for($i = 0; $i < $n; $i++){

    $input = explode(' ', readline());

    if(count($input) == 4){

        $student_number = $input[0];
        $first_name = $input[1];
        $last_name = $input[2];
        $phone = $input[3];

        $db_stm = $db->prepare('INSERT INTO students(STUDENT_NUMBER, FIRST_NAME, LAST_NAME, PHONE)
                                        VALUES (:student_number, :first_name, :last_name, :phone)');
        $db_stm->bindParam('student_number', $student_number);
        $db_stm->bindParam('first_name', $first_name);
        $db_stm->bindParam('last_name', $last_name);
        $db_stm->bindParam('phone', $phone);

        $db_stm->execute();

    } else if(count($input)){
        $first_name = $input[0];
        $last_name = $input[1];
        $student_number = $input[2];

        $db_stm = $db->prepare('INSERT INTO students(STUDENT_NUMBER, FIRST_NAME, LAST_NAME)
                                        VALUES (:student_number, :first_name, :last_name)');
        $db_stm->bindParam('student_number', $student_number);
        $db_stm->bindParam('first_name', $first_name);
        $db_stm->bindParam('last_name', $last_name);

        $db_stm->execute();
    }
}