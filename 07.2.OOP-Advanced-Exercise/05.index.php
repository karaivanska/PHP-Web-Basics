<?php
/*
You have a business - manufacturing cell phones. But you have no software developers, so you
call your friends and ask them to help you create a cell phone software. They agree and you
start working on the project. The project consists of one main model - a Smartphone. Each of
your smartphones should have functionalities of calling other phones and browsing in the world
wide web. Your friends are very busy, so you decide to write the code on your own. Here is the
mandatory assignment:
You should have a model - Smartphone and two separate functionalities which your smartphone has
- to call other phones and to browse in the world wide web. You should end up with one class
and two interfaces.
Input
The input comes from the console (CLI). It will hold two lines:
•	First line: phone numbers to call (String), separated by spaces.
•	Second line: sites to visit (String), separated by spaces.
Output
•	First call all numbers in the order of input then browse all sites in order of input
•	The functionality of calling phones is printing on the console the number which are being
called in the format:
Calling... <number>
•	The functionality of the browser should print on the console the site in format:
Browsing: <site>!
•	If there is a number in the input of the URLs, print: "Invalid URL!" and continue printing
the rest of the URLs.
•	If there is a character different from a digit in a number, print: "Invalid number!" and
continue to the next number.
 */

interface iCall
{
    public function calling();
}

interface iBrowse
{
    public function browsing();
}

include '05.Smarthphone.php';

$input = readline();
$counter = 0;

while ($input != '') {
    $args = explode(' ', $input);

    if ($counter == 0) {
    for ($i = 0; $i < count($args); $i++) {
         $currentPhoneNumber = $args[$i];
            $phoneNum = new Smarthphone($currentPhoneNumber);
            echo $phoneNum->calling();
        }
    } elseif ($counter == 1){
        for($i = 0; $i < count($args); $i++){
            $currentPhoneNumber = $args[$i];
            $phoneNum = new Smarthphone($currentPhoneNumber);
            echo $phoneNum->browsing();
        }
    }
    $counter++;
    $input = readline();
}

