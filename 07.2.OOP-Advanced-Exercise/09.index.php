<?php
/*
You are an owner of the most epic video game of the world - 3 MooD. Your employees have gone
on summer vacation. But there is a problem in the application and you are on your own. So the
problem is how to store the information for the players. The best approach to you, seems to be,
storing them in GameObjects.
 In your game, there are two types of characters - Demon and Archangel. All characters in the
game have:
•	username
•	hashedPassword
•	level
•	special points.
The main difference between the Demon and the Archangel is that the Demon has energy (as special
points) and the Archangel has mana (as special points). Your task is to model the application.
When you receive the username and the character type, you should generate the hashed password by
the formulas below:
•	For a Demon: username length * 217
•	For an Archangel: (username characters in reversed order) + (username length * 21)
Your task is to print the info as it is written in the Output.
Input
The input consists of single line. First, you will get the username of a player. The second
parameter is its character type. The next two parameters are his mana / energy points and his level. Format:
<username> | <character type> | <special points> | <level>
Output
Print the info on two lines, for a single entry (player) in the format:
<”username”> | <”hashed password”> -> <character type>
<special points * level>
Constraints
•	Username – alphabetical letters (Latin), no more than 10 characters and you do not need to
check it explicitly.
•	Character type – String, Demon or Archangel, no need to check it explicitly.
•	Special points (Mana) – a valid Integer, no need to check it explicitly, print as integer
without decimal separator and trailing zeros.
•	Special points (Energy) – a valid Double, no need to check it explicitly, round up and print
one digit after the decimal separator.
•	Level – a valid Integer, no need to check it explicitly.
 */

interface iEnergy
{
    public function setEnergy($specialPoints, $level);
    public function getEnergy();
}

interface iMana
{
    public function setMana($specialPoints, $level);
    public function getMana();
}

include '09.Demons.php';
include '09.Angels.php';

$input = explode(' | ', readline());

$username = strval($input[0]);
$character_type = strval($input[1]);
$special_points = floatval($input[2]);
$level = intval($input[3]);

if($character_type == 'Demon'){
    $demon = new Demons($username, $character_type, $special_points, $level);
    echo '"'.$demon->getUsername().'"'. ' | ' . '"'.$demon->getHashedPassword().'"'. ' -> ' . $demon->getCharacterType().PHP_EOL;
    echo $demon->getEnergy();

}elseif ($character_type == 'Archangel') {
    $angel = new Angels($username, $character_type, $special_points, $level);
    echo '"' . $angel->getUsername() . '"' . " | " . '"' . $angel->getReversedUsername() .  $angel->getHashedPassword() . '"' . ' -> ' . $angel->getCharacterType().PHP_EOL;
    echo $angel->getMana();
}



