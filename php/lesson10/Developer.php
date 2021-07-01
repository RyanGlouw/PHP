<?php

// класс Developer наследует (расширяет) класс Person
// Person родительский супер класс
class Developer extends Person
{

    private $skills = [];
    private $rating;

    public function __construct(string $email, int $rating)
    {
        parent::__construct($email);
        $this->rating = $rating;
    }

}

