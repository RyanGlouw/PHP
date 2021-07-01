<?php

// нельзя создать экземпляр abstract-ного класса
// abstract-ный класс может содержать abstract-ные методы
// abstract-ный класс можешь содержать методы без реализации (абстрактные)
abstract class Animal
{
 protected $name = 'Без имени';
 protected $age;

 public function __construct(float $age)
 {
    $this->age = $age;
 }
// метод без реализации
 abstract public function run();
 public function jump(){
     echo 'животное прыгает';
 }
}
// в программе могу создаваться разные животные
// у каждого должны быть возраст имя плюс могу быть
// уникальные характеристики

// у каждого животного должен быть реализован метод run
// реализация метода run могут отличаться