<?php

class Employeee
{
    private $first_name;
    private $middle_name;
    private $last_name;
    private $department;
    private $positions;
    private $passport_id;

    //private $country;

    public function __construct($first_name, $middle_name, $last_name, $department = null, $positions = null, $passport_id = null/*, $country = null*/)
    {
        $this->first_name = $first_name;
        $this->middle_name = $middle_name;
        $this->last_name = $last_name;
        $this->department = $department;
        $this->positions = $positions;
        $this->passport_id = $department;
        //$this->country = $country;
    }

    /*public function insertCountry($db, $country)
    {
        $query = $db->prepare("INSERT INTO employees ($country) VALUES(?)");
        $query->execute($this->country);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }*/

    public function insertEmployee($db)
    {
        $query = $db->prepare('INSERT INTO `employees` (first_name, middle_name, last_name, department, positions, passport_id/*, country*/) VALUES(?,?,?,?,?,?/*,?*/)');
        $query->execute(array($this->first_name, $this->middle_name, $this->last_name, $this->department, $this->positions, $this->passport_id/*, $this->country*/));
    }

    public function createPhone($db, $phone, $type, $id)
    {
        $query = $db->prepare('INSERT INTO employee_phones (employee_id, phone, type) VALUES(?,?,?)');
        return $query->execute(array($id, $phone, $type));
    }

    public function exist($db)
    {
        $query = $db->prepare('SELECT * FROM `employees` WHERE first_name = ? AND middle_name = ? AND last_name = ? AND passport_id = ?');
        $query->execute(array($this->first_name, $this->middle_name, $this->last_name, $this->passport_id));
        return true;
    }

    public function getEmployee($db)
    {
        $query = $db->prepare('SELECT * FROM `employees` WHERE first_name = ? AND middle_name = ? AND last_name = ?');
        $query->execute(array($this->first_name, $this->middle_name, $this->last_name));

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getInfo($db, $fname)
    {
        $query = $db->prepare("SELECT * FROM employees u INNER JOIN employee_emails i ON u.id = i.id WHERE first_name LIKE '$fname%' OR last_name LIKE '$fname%'");

        $query->execute(array($this->first_name, $this->middle_name, $this->last_name, $this->department, $this->positions, $this->passport_id));
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}