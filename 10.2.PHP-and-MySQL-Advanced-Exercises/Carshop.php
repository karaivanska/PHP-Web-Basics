<?php

class Carshop
{
    private $db = false;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function main()
    {
        do {
            $input_str = trim(fgets(STDIN));
            $input_arr = explode(",", $input_str);
            //Sample: Audi, A4, 2004, Ivan, Ivanov, BGN 7000
            if (count($input_arr) == 6) {
                $car = [
                    'make' => $input_arr[0],
                    'model' => $input_arr[1],
                    'year' => $input_arr[2],
                ];
                $person = [
                    'name' => $input_arr[3],
                    'family' => $input_arr[4]
                ];
                $amount = [
                    'amount' => str_replace("BGN", "", $input_arr[5])
                ];
                $sale_id = $this->setSale($car, $person, $amount);
                $this->getSale($sale_id);

                if ($sale_id) {
                    echo $this->getSale($sale_id);
                }
            } elseif (count($input_arr) == 1 and $input_arr[0] == 'Sales') {
                echo $this->getSales();
            }
        } while ($input_str != "Bye");
    }

    protected function getSale($sale_id)
    {
        $stmt = $this->db->prepare("SELECT `date_time` FROM sales WHERE `id` = $sale_id");
        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            return "New sale entered: " . $row['date_time'];
        }
    }

    protected function getSales()
    {
        $stmt = $this->db->prepare("
              SELECT `cars`.`make`,
                     `cars`.`model`,
                     `cars`.`year`,
                     `sales`.`date_time`,
                     `sales`.`amount`,
              SUM(`sales`.`amount`)
              FROM `sales`, `cars`
              WHERE `cars`.`id` = `sales`.`car_id`");
        $stmt->execute();

        /*while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $out .= $row['make'] . ", ";
            $out .= $row['model'] . ", ";
            $out .= $row['date_time'] . ", ";
            $out .= $row['amount'] . PHP_EOL;
        }*/

        //get my full name
        /* $stmt = $this->db->prepare("SELECT get_full_name (?, ?) AS MyName");
         if ($stmt->execute(['Iva', 'Karaivanska'])) {
             while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                 print_r($row);
             }
         }

         $stmt = null;
         $db = null; */
        $out = "";
        $stmt = $this->db->prepare("SELECT @sum AS 'Total sales'");
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $out .= $row[''];
        }
        /*$stmt = $this->db->prepare("SELECT *
                                    FROM deal, customer_info                                 
                                   ");
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $out .= $row['make'] . ", ";
            $out .= $row['model'] . ", ";
            $out .= $row['date_time'] . ", ";
            $out .= $row['amount'] . PHP_EOL;
            $out .= "Sold to ".$row['first_name'] . " " . $row['family_name'] . " for BGN " . $row['amount']. PHP_EOL;

            $out .= "---" . PHP_EOL;
        }*/


        /*if ($row) {
            $out .= "Total: " . $row['amount_total'] . PHP_EOL;
        }*/
        return $out;
    }

    protected function setSale($car, $person, $amount)
    {
        try {
            // Insert into car
            $this->db->beginTransaction();
            $stmt = $this->db->prepare("
              INSERT INTO cars
                (`make`, `model`, `year`)
              VALUES
                (?, ?, ?)");
            //$car_id = "null";
            //$stmt->bindParam(1, $car_id);
            $stmt->bindParam(1, $car['make']);
            $stmt->bindParam(2, $car['model']);
            $stmt->bindParam(3, $car['year']);
            $stmt->execute();
            $car_id = $this->db->lastInsertId();
            // Insert into customers

            $stmt = $this->db->prepare("
              INSERT INTO customers
                (`first_name`, `family_name`)
              VALUES
                (?, ?)");
            $stmt->bindParam(1, $person['name']);
            $stmt->bindParam(2, $person['family']);
            $stmt->execute();
            $customer_id = $this->db->lastInsertId();

            // Insert into sales
            $stmt = $this->db->prepare("
              INSERT INTO sales
                (`date_time`,`amount`, `car_id`, `customer_id`)
              VALUES (NOW(), ?, ?, ?)");
            $stmt->bindParam(1, $amount['amount']);
            $stmt->bindParam(2, $car_id);
            $stmt->bindParam(3, $customer_id);
            $stmt->execute();
            $sale_id = $this->db->lastInsertId();

            $this->db->commit();

            $stmt = $this->db->prepare("SET @sum = 0");

            return $sale_id;

        } catch (PDOException $e) {
            $this->db->rollBack();
            print "Error!: " . $e->getMessage() . "<br/>";
        }
    }
}