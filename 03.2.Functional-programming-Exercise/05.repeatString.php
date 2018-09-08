<?php
/*
Write a simple anonymous function which is contained in $repeatString
which should be recursive and repeat a string $n times. The input
should be a hard-coded value. The output should be displayed by echo.
 */

$input = '';

$repeatString = function(&$repeatString, $i = 0, $n = 3, $input){
    if($i < $n){
        $input .= 'Hello, there!' . ' ';
        $temp = $repeatString($repeatString, $i + 1, $n, $input);
        return $temp;
    }

    return $input;
};

echo $repeatString($repeatString, 0, 3, $input);