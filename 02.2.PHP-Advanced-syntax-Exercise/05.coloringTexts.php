<form action="">
    <textarea name="input" id="" cols="30" rows="10" required></textarea><br>
    <input type="submit" placeholder="Color Text">
</form>

<?php
/*
Write a PHP program TextColorer.php that takes a text
from a textfield with attribute name=”input” , colors each
character according to its ASCII value and prints the result.
If the ASCII value of a character is odd, the character should
be printed in blue. If it’s even, it should be printed in red.
For the colors use the <font> tag.
 */

if (isset($_GET['input'])) {
    $text = trim($_GET['input']);
    $removedSpaces = preg_replace('/\s+/', '', $text);

    for ($i = 0; $i < strlen($removedSpaces); $i++) {
        $asciiValue = ord($removedSpaces[$i]);

        if ($asciiValue % 2 == 0) {
            echo "<font color='red'>{$removedSpaces[$i]} </font>";
        } else {
            echo "<font color='blue'>{$removedSpaces[$i]} </font>";
        }
    }
}