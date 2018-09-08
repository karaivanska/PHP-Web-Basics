<?php
/*
A mountain climber wants to climb all peaks in the Andes mountain
(id = 3) which are higher than 6700 meters. He needs to start a
simple script called climb.php to do that. It uses the geography_db.sql
which should be loaded in the MySQL server some way.
 */

include "02.geography_db.php";

$db = new PDO('mysql:host=localhost;dbname=geography', 'root', '****');
$result = $db->query("SELECT * FROM `peaks`
                              WHERE `mountain_id` = 3 AND `elevation` > 6700");

foreach ($result as $i=>$r){
    echo $r['peak_name'] . "," . $r['elevation'] . PHP_EOL;
}