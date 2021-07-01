<?php

// класс реализующий интерфейс обязан реализовывать все его
// абстрактные методы
class Dog extends Animal implements LearnAble
{
    public function lear()
    {
        echo 'собака занимается с хозяином';
    }

    public function run()
   {
       echo 'реализация в классе Dog';
   }
}