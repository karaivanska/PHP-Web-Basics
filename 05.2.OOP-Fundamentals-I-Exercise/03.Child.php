<?php

class Child extends Person{

   protected function setAge($age)
   {
       if($age > 15){
           throw new Exception('Child’s age must be less than 16!');
       }

       $this->age=$age;
   }
}