<?php

Include("02.geography_db.php");

 class MyPDO extends PDO{
     public function setErrorSilent(){
         $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
     }

     public function setErrorException(){
         $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
     }
 }