<?php


class Pizza
{
    private $name;
    private $base = 100;
    private $ingr = [];


    public function addIng(...$ingredient)
    { // добавление ингридиентов в массив
        $this->ingr = array_merge($this->ingr, $ingredient); // слияние массивов
    }

    public function returnCountPizza()
    { // метод получения стоимости пиццы (основа + ингридиенты)
        $cost = 0; // будущая переменная которая будет содержать стоимость всех ингридиентов
        foreach ($this->ingr as $ing) {
            $cost += $ing->getCost();
        }
        return $cost + $this->base; // возвращаем стоимость ингридиентов и основы пиццы
    }

    public function setName($name) // устанавливаем название пиццы
    {
        $this->name = $name;
    }

    public function getName() // получаем название пиццы (если нужно)
    {
        return 'Ваша пицца: ' . $this->name;
    }

}
