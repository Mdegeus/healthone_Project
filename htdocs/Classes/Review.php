<?php


class Review
{
    public $id;
    public $name;
    public $email;

    public function __construct()
    {
        settype($this->id, 'integer');
    }
}