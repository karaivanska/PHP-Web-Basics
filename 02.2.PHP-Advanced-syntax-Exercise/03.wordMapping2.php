<form action="">
    <textarea name="input" title="text" required></textarea><br>
    <input type="submit" name="submit" placeholder="Count words">
</form>

<?php
/*
Write a PHP program WordMapper.php that takes a text from a textarea
with attribute name=”input” and prints each word and the number of times
it occurs in the text. The search should be case-insensitive.
The result should be printed as an HTML table with border attribute set to 2.
If you get 0/100 in judge check in details the zero unsolved-problems.
 */

if(isset($_GET["input"]) && !empty(trim($_GET["input"]))){
    $text = trim($_GET["input"]);
    $words = array_count_values(str_word_count(strtolower($text), 1));

    $wordCount = [];
    foreach ($words as $word){
        if(!array_key_exists($word, $wordCount)){
            $wordCount[$word] = 0;
        }
        $wordCount[$word]++;
    }

    echo "<table border='2'>";

    foreach ($words as $key => $value){
        echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
    }
    echo "</table>";
}
