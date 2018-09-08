<?php

class InvalidSong
{
    private $artist;
    private $song;
    private $minutes;
    private $seconds;
    private $total;
    public static $counter = 0;


    public function __construct($artist, $song, $minutes, $seconds)
    {
        $this->setArtist($artist);
        $this->setSong($song);
        $this->setDuration($minutes, $seconds);
        self::$counter++;
    }

    private function setArtist($artist)
    {
        if(strlen($artist) < 3 || strlen($artist) > 20){
            throw new Exception('Artist name should be between 3 and 30 symbols.');
        }

        $this->artist=$artist;
    }

    private function setSong($song)
    {
        if (strlen($song) < 3 || strlen($song) > 20) {
            throw new Exception('Song name should be between 3 and 30 symbols.');
        }

        $this->song=$song;
    }

    private function setDuration($minutes, $seconds)
    {
        if($seconds < 0 || $seconds > (14 * 60 + 59)){
            throw new Exception('Invalid song length.');
        }

        if($minutes < 0 || $minutes > 14){
            throw new Exception('Song minutes should be between 0 and 14.');
        }

        if($seconds < 0 || $seconds > 59){
            throw new Exception('Song seconds should be between 0 and 59.');
        }

        $this->minutes=$minutes;
        $this->seconds=$seconds;
        $this->total=$this->minutes * 60 + $this->seconds;
    }

    public function getArtist()
    {
        return $this->artist;
    }

    public function getSong()
    {
        return $this->song;
    }

    public function getDuration()
    {
       return $this->total;
    }
}