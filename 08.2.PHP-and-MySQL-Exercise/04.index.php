<?php
/*
Create a PHP script that will list all countries in Asia with population above 1
billion (1 000 000 000). To do that now join the two tables continents and countries.
 */

include "02.geography_db.php";

$db = new PDO('mysql:host=localhost;dbname=geography', 'root', '****');
$result = $db->query("SELECT `a` . `country_name` 
                              FROM `countries` AS `a`, `continents` AS `b`
                              WHERE `a`.`continent_code` = `b` . `continent_code`
                              AND `a`.`population` > 1000000000");

foreach ($result as $i=>$country) {
    echo $country['country_name'] . PHP_EOL;
}