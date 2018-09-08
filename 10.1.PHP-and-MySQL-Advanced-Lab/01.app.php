<?php

include '01.db_config.php';
include 'Students.php';

$input = trim(fgets(STDIN));
$args = explode(' ', $input);

var_dump($args);
$first_name = $args[0];
$last_name = $args[1];
$student_number = $args[2];
$course_name = $args[3];

$student = new Students($first_name, $last_name, $student_number, $course_name);
$student->insertStudent($db);