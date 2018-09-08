<?php

class Book
{
    protected $title;
    protected $author;
    protected $price;
    protected $bookType;

    public function __construct($title, $author, $price)
    {
        $this->setTitle($title);
        $this->setAuthor($author);
        $this->setPrice($price);
    }

    private function setTitle($title)
    {
        if (strlen($title) < 3) {
            throw new Exception('Title not valid!');
        }

        $this->title = $title;
    }

    private function setAuthor($author)
    {
        if (ctype_digit($author[0])) {
            throw new Exception('Author not valid!');
        }

        $this->author = $author;
    }

    protected function setPrice($price)
    {
        if ($price <= 0) {
            throw new Exception('Price not valid!');
        }

        $this->price = $price;
    }

    protected function setBookType($bookType)
    {
        if ($bookType != 'GOLDEN' || $bookType != 'STANDARD') {
            throw new Exception('Type is not valid!');
        }
        $this->bookType = $bookType;
    }

    public function __toString()
    {
        return $this->author . $this->title . " " . $this->price . "\n";
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getBookType()
    {
        return $this->bookType;
    }
}