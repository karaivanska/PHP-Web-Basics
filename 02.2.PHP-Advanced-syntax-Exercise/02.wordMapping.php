<?php
/*Write a PHP program WordMapper.php that takes a text
 and prints each word and the number of times it occurs
in the text. The search should be case-insensitive.
The result should be printed as an HTML table with border
attribute set to 2.
 */

$text = 'The quick brows fox.!!! jumped over..// the lazy dog.!';
$words = str_word_count(strtolower($text), 1);
$occure = array_count_values($words);
krsort($occure);

print_r($occure);
