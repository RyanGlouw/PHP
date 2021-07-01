<?php
// private позволяет обращаться к свойству или методу
// только внутри класса
// protected e позволяет обращаться к свойству или метод
//у внутри текущего класса или внутри дочерних классов
class Person
{
    protected $name;
    private $age;
    public $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function setAge(int $age)
    {
        if ($age < 18) {
            echo 'Значение age не может быть меньше 18';
            return;
        }
        $this->age = $age;

    }

    public function getAge()
    {
        return $this->age;
    }
}