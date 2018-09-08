<?php

class Employees
{
    private $first_name;
    private $middle_name;
    private $last_name;
    private $department;
    private $positions;
    private $passport_id;

    public function __construct($first_name, $middle_name, $last_name, $department = null, $positions = null, $passport_id = null)
    {
        $this->first_name = $first_name;
        $this->middle_name = $middle_name;
        $this->last_name = $last_name;
        $this->department = $department;
        $this->positions = $positions;
        $this->passport_id = $department;
    }

    public function insertEmployee($db)
    {
        $query = $db->prepare('INSERT INTO `employees` (first_name, middle_name, last_name, department, positions, passport_id) VALUES(?,?,?,?,?,?)');
        $query->execute(array($this->first_name, $this->middle_name, $this->last_name, $this->department, $this->positions, $this->passport_id));
    }

    public function createEmail($db, $email_type, $email, $id)
    {
        $query = $db->prepare('INSERT INTO employee_emails (employee_id, email, type) VALUES(?,?,?)');
        return $query->execute(array($id, $email, $email_type));
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

        /*if ($query->rowCount() == 0) {
            return false;
        }*/

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}