<?php


abstract class Person
{
    private string $name;
    protected int $age;


    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name){
        if (strlen($name) < 1){
            echo 'Длина имени должна быть не менее 1 символа';
            return false;
        }
        return $this->name = $name;
    }

    public function getAge()
    {
        return $this->name;
    }
    public function setAge(int $age)
    {
        if ($age < 7 && $age > 18){
            echo 'Возраст должен быть не менее 7 лет и не более 18';
            return false;
        }
        $this->age = $age;
        return true;
    }

}

