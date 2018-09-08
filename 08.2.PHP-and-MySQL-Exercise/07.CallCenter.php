<?php

class CallCenter
{
    private $dbi = false;

    public function connectDB()
    {
        $db = new Database();
        $this->dbi = $db->connect();
    }

    public function __construct()
    {
        $this->connectDB();
    }

    public function main()
    {
        do {
            $input = trim(fgets(STDIN));
            $customer = explode(' ', $input);
            $res = $this->getCountryInfo($input);
            $currency = $this->getCurrency($input);
            $country = $this->getCountry($input);
            $mountain = $this->getMountain($input);
            $peak = $this->getPeak($input);

            if ($res != false) {
                $flag = false;

                if ($customer[0] == 'Customer') {
                    $single_customer = $this->insertCustomer($customer[1],$customer[2], $customer[3]);
                }

                if($customer[0] == 'Remove'){
                    $removed = $this->removeCustomer($customer[1], $customer[2]);
                }

                if(strlen($input) > 5){
                    $arr = explode(' ', $input);
                    $arr[2] = rtrim($arr[2],"?");
                    $users = $this->getUsersFromCountry($arr[2]);

                    echo "Customers in" . ' ' . $arr[2]. ":".PHP_EOL;

                    foreach ($users as $k=>$v){
                        echo $v['customer_name'].' '. $v['customer_family'].PHP_EOL;
                    }
                }

                foreach ($res as $i => $iv) {
                    echo "Country: " . $iv['country_name'] . "\r\n";
                    echo "Capital: " . $iv['capital'] . "\r\n";
                    $flag = true;
                    //break;
                }

                foreach ($currency as $i => $v) {
                    echo "Currency: " . $v['currency_code'] . PHP_EOL;
                    echo "Continent: " . $v['continent_code'] . PHP_EOL;
                }

                foreach ($country as $i => $v) {
                    echo "Currency: " . $v['currency_code'] . PHP_EOL;
                    echo "Continent: " . $v['continent_code'] . PHP_EOL;
                }

                $data_exists = ($mountain->fetchColumn() > 0) ? true : false;

                if ($data_exists) {
                    echo 'Forward customer for special offers! ';
                }

                $peak_exists = ($peak->fetchColumn() > 0) ? true : false;

                if ($peak_exists) {
                    echo "Show high mountain special equipment offers!" . PHP_EOL;
                }

                if ($flag == false) {
                    echo "Country not found.";
                }
            } else {
                echo "Could not read from DB.";
            }

        } while ($input != 'Bye');
    }

    private function getCountryInfo($str)
    {
        $result = $this->dbi->query("
           SELECT `country_name`, `capital` 
           FROM `countries` 
           WHERE `country_name` = \"$str\"
           OR `country_code` = \"$str\"
           OR `iso_code` = \"$str\"
           LIMIT 0,1 ");

        if (is_object($result)) {
            return ($result);
        } else {
            return false;
        }
    }

    public function getCurrency($str)
    {
        $result = $this->dbi->query("SELECT * FROM countries WHERE iso_code = \"$str\"");
        return $result;
    }

    public function getCountry($str)
    {
        $result = $this->dbi->query("SELECT * FROM countries WHERE country_code = \"$str\"");
        return $result;
    }

    public function getMountain($str)
    {
        $result = $this->dbi->query("SELECT * FROM mountains_countries WHERE country_code = \"$str\"");

        return $result;
    }

    public function getPeak($str)
    {
        $result = $this->dbi->query("SELECT * FROM mountains_countries WHERE country_code = \"$str\"");

        return $result;
    }

    public function insertCustomer($country, $fname, $lname)
    {
        $result = $this->dbi->query("INSERT INTO customer (country_code, customer_name, customer_family) 
                                     VALUES (\"$country\",\"$fname\", \"$lname\")");
        return $result;
    }

    public function removeCustomer($fname, $lname)
    {
        $result = $this->dbi->query("DELETE FROM customer WHERE customer_name = \"$fname\" and customer_family = \"$lname\"");
        return $result;
    }

    public function getUsersFromCountry($country)
    {
        $result = $this->dbi->query("SELECT * FROM customer WHERE country_code = \"$country\"");
        return $result;
    }
}

