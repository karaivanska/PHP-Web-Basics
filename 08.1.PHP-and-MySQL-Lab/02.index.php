<?php
/*
●	Create php file that change student data from standard input.
●	Input format must be
<User_id> <param_name> <param_value>
●	Param_name will indicate will indicate which parameter must be change
●	Param_value  will indicate will indicate new value of parameter
●	New data must be saved in Database
 */

$db = new PDO('mysql:host=localhost;dbname=php-course', 'root', '****');

$input = explode(' ', readline());

$user_id = $input[0];

$db_stm = $db->prepare('UPDATE students SET  FIRST_NAME = :param_value WHERE FIRST_NAME = :param_name');

$db_stm->bindParam('param_name', $param_name);
$db_stm->bindParam('param_value', $param_value);

$db_stm->execute();


