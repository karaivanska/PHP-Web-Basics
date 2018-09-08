<?php
/*
Write a program that prints a DNA helix with length, specified by
the user. The helix has a repeating structure, but the symbol in
the chain follows the sequence ATCGTTAGGG. See the examples for
more information. The input comes as a single string element that
must be parsed to a number. It represents the length of the required
helix. The output is the completed structure, printed on the console.
 */

$rows = intval(fgets(STDIN));
$sequence = 'ATCGTTAGGG';
$index = 0;

for ($i = 0; $i < $rows; $i++) {
    $currentRow = $i % 4;
    if ($currentRow === 0) {
        echo "**" . $sequence[$index++ % strlen($sequence)] . $sequence[$index++ % strlen($sequence)] . '**';
        echo "\n";
    } else if ($currentRow === 1 || $currentRow === 3) {
        echo "*" . $sequence[$index++ % strlen($sequence)] . '--' . $sequence[$index++ % strlen($sequence)] . '*';
        echo "\n";
    } else {
        echo $sequence[$index++ % strlen($sequence)] . '----' . $sequence[$index++ % strlen($sequence)];
        echo "\n";
    }
}