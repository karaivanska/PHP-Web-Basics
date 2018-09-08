<?php
/*
●	Create php file that delete student data from standard input.
●	Input format must be <User_id>
●	Data for studen with ID = N must be deleted from Database
 */

$db = new PDO('mysql:host=localhost;dbname=php-course', 'root', '****');

$input = explode(' ', readline());

$user_id = $input[0];

$db_stm = $db->prepare('DELETE FROM students WHERE STUDENT_NUMBER = :user_id;');

$db_stm->bindParam('user_id', $user_id);

$db_stm->execute();