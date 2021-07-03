<?php


class Order
{
    private $number;
    private $date;
    private $pizza = [];

    public function setNumber($number) // устанавливаем номер заказа
    {
        $this->number = random_int($number, 10);
    }

    public function getNumber() // получаем номер заказа (если нужно)
    {
        return 'Ваш номер ' . $this->number;
    }

    public function setDate($date) // устанавливаем дату заказа
    {
        $this->date = date("M-d-Y", mktime(0, 0, 0, 07, $date, 2021));
    }

    public function getDate() // получаем дату заказа
    {
        return 'Дата заказа ' . $this->date;
    }

    public function addEverythingPizza(...$pizzas) // добавляем в заказ все пиццы
    {
        return $this->pizza = array_merge($this->pizza, $pizzas);

    }

    public function getCountPizza() // получаем стоимость всех пицц в заказе
    {
        $cost = 0;
        foreach ($this->pizza as $pizz) {
            $cost += $pizz->returnCountPizza();
        }
        return 'Итого к оплате: ' . $cost;
    }
}