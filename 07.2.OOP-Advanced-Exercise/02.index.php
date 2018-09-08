<?php
/*
Using the code from the previous task, define an interface Identifiable with a method setId().
In the class it will set a property called Id which is integer. Define an interface Birthable
with a method setBirthdate(). In the class it will set a property birthDate which is string.
Implement setId() and setBirthdate() in the Citizen class. Rewrite the Citizen constructor
to accept the new parameters. Rewrite __toString() to output the persons Id and date of birth.
 */

include '02.Citizen.php';

interface iPerson
{
    public function setName($name);
    public function setAge($age);
}

interface iIdentifiable
{
    public function setId($id);
}

interface iBirthdable
{
    public function setBirthdate($birthDate);
}

$myCitizen = new Citizen('Petar', 23, 938438, "12.05.2005");
echo $myCitizen;