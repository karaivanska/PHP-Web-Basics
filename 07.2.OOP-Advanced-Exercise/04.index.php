<?php
/**
 * Created by PhpStorm.
 * User: karai
 * Date: 12-May-18
 * Time: 07:51
 */

interface iFerrariTwo
{
    public function setBrake();
    public function setGas();
    public static function forUrl($driver, $rep);
}

include '04.FerrariTwo.php';

$input = readline();

while($input != '') {
    $driver = new FerrariTwo($input);
    echo $driver;

    $input = readline();
}
