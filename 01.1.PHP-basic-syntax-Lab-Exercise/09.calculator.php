<?php

if (isset($_GET['calculate'])) {
    $operation = $_GET['operation'];
    $numberOne = $_GET['number_one'];
    $numberTwo = $_GET['number_two'];

    echo "<ul>";
    if ($operation == "sum") {
        $output = "".($numberOne + $numberTwo);
    } else if ($operation == "subtract") {
        $output = "".($numberOne - $numberTwo);
    } else {
        $output = " <li style='color: red'>  Invalid operation supplied . </li> ";
    }
    echo "</ul>";
}
include ("09.calculator_frontend.php");