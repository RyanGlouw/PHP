<?php


class Ingredient
{
    private $name; // имя ингредиента
    private $cost; // стоимость ингредиента

    public function setCost(int $cost) // метод установки стоимости
    {
        $this->cost = $cost;
    }

    public function getCost() // метод получения стоимости
    {
        return $this->cost;
    }

    public function setName(string $name) // метод установки имени
    {
        $this->name = $name;
    }

}