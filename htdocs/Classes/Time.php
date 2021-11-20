<?php


class Time
{
    public $id;
    public $startTime;
    public $endTime;

    public function __construct()
    {
        settype($this->id, 'integer');
    }
}