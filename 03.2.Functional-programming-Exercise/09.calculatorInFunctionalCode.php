<?php
/*
Write a script in PHP which consists of files calculator.php
(program logic) and calculator_frontend.php (HTML) which does
all four operations: sum, subtract, multiply and divide. Use
the anonymous functions you created in problem 6 and 7.
 */

//$output = '';
$a = 0;
$b = 0;

$opSum = function ($a, $b) {
    return $a + $b;
};

$opSubtract = function ($a, $b) {
    return $a - $b;
};

$opMultiply = function ($a, $b) {
    return $a * $b;
};

$opDivide = function ($a, $b) {

    if ($b == 0) {
        return 'division_by_zero';
    }
    return $a / $b;
};

$simpleCalc = function (&$simpleCalc, &$b, &$a, $output = '')
use ($opSum, $opSubtract, $opMultiply, $opDivide) {

    if (isset($_GET['Go'])) {

        $op = $_GET['operation'];
        $b = $_GET['b'];
        $a = $_GET['a'];

         if (!is_numeric($a) || !is_numeric($b)) {

            if (!is_numeric($a)) {
                $output = 'op1_not_numeric';
            }
            if (!is_numeric($b)) {
                $output = 'op2_not_numeric';
            }
            return $simpleCalc ($simpleCalc, $b, $a, $output);

        } else if ($a < 0 || $a > 100 || $b < 0 || $b > 100) {
            $output = 'out_of_range';
            return $simpleCalc ($simpleCalc, $b, $a,  $output);

        } else if ($op == 'sum') {
            $output = $opSum($a, $b);
            return $simpleCalc ($simpleCalc, $b, $a,  $output);

        } else if ($op == 'subtract') {
            $output = $opSubtract($a, $b);
            return $simpleCalc($simpleCalc, $b, $a,  $output);

        } else if ($op == 'multiply') {
            $output = $opMultiply($a, $b);
            return $simpleCalc($simpleCalc, $b, $a, $output);

        } else if ($op == 'divide') {

            $output = $opDivide($a, $b);
            return $simpleCalc($simpleCalc, $b, $a, $output);
        }
    } else {
        return $output;
    }
  return $output;
};
$output = $simpleCalc($simpleCalc, $b, $a);
include('09.calculator-frontend.php');
