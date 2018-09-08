<?php

class Smarthphone implements iCall, iBrowse {

    private $phoneNumber;
    private $url;
    static $count = 0;

    public function __construct(string $data)
    {
        $this->setData($data);
    }

    public function setData($data){
        if(is_numeric($data)){
            $this->phoneNumber=$data;

        } else {
            $this->url=$data;
        }
    }

    public function calling()
    {
        return "Calling...." . $this->phoneNumber . PHP_EOL;
    }

    public function browsing()
    {
        $pattern = '/[0-9]/';
        if(preg_match($pattern, $this->url)){
            return "Invalid URL!" . PHP_EOL;
        }
        return "Browsing: " . $this->url . "!" . PHP_EOL;
    }
}