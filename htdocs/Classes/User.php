<?php


class User
{
    public $id;

    public function __construct()
    {
        settype($this->id, 'integer');
    }
}