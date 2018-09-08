<form method="get">
    <div>
        Operation:
        <select name="operation">
            <option value="sum">Sum</option>
            <option value="subtract">Subtract</option>
        </select>
    </div>
    <div>
        Number 1:
        <input type="text" name="number_one"/>
    </div>
    <div>
        Number 2:
        <input type="text" name="number_two"/>
    </div>
    <div>
        <input type="submit" name="calculate" value=" Calculate "/>
    </div>
</form>
<?php

if (isset($_GET['calculate'])) {
    $operation = $_GET['operation'];
    $numberOne = $_GET['number_one'];
    $numberTwo = $_GET['number_two'];

    echo "<ul>";
    if ($operation == "sum") {
        echo " <li style='color: green'> " . ($numberOne + $numberTwo) . "</li>";
    } else if ($operation == "subtract") {
        echo " <li style='color: blue'> " . ($numberOne - $numberTwo) . "</li>";
    } else {
        echo " <li style='color: red'>  Invalid operation supplied . </li> ";
    }
    echo "</ul>";
}