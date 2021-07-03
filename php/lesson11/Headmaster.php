<?php


class Headmaster extends Person
{
 public function setClassesStart()
 {
     echo 'Занятия начались!';
 }
 public function setClassesEnd()
 {
     echo 'Занятия закончены!';
 }

 public function  setAge(int $age)
 {
     if ($age < 35){
         echo 'Директору должно быть не менее 35 лет';
     }
     $this->age = $age;
     return true;
 }
}