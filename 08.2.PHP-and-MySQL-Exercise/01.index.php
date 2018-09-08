<?php

Include("01.db_config.php");
$db = new PDO('mysql:host=localhost;dbname=geography', 'root', '****');

$continents = $db->query('SELECT * FROM `continents`');

foreach ($continents as $i => $continent) {
    print_r($continent);
}
