<?php


class Pizza
{
    public $base;
    public $cost = 100;

    public function __construct($base, $cost)
    {
        $this->base = $base;
        $this->cost = $cost;
    }
}