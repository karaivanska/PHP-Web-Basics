<?php

class Robots implements iId {

    private $model;
    private $id;

    public function __construct(string $model, int $id)
    {
      $this->model=$model;
      $this->id=$id;
    }

    public function getIndavidualId():int
    {
       return $this->id;
    }
}