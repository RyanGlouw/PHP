<?php

class School
{
    private string $name;
    private Headmaster $headmaster;
    private array $teachers;
    private array $pupils;

    public function __construct(string $name, Headmaster $headmaster, $teachers, $pupils)
    {
        $this->name = $name;
        $this->setHeadmaster($headmaster);
        $this->teachers = $teachers;
        $this->pupils = $pupils;
    }

    public function setHeadmaster(Headmaster $headmaster)
    {
        $this->headmaster = $headmaster;
    }

    public function dayOfSchool()
    {
        $this->headmaster->setClassesStart();
        foreach ($this->teachers as $teacher)
        {
            foreach ($this->pupils as $pupil)
            {
                if ($teacher->getSubject() === $pupil->getSubject()){
                    $teacher->teach($pupil);
                }
            }
        }
        $this->headmaster->setClassesEnd();
    }
}

//Задача "Школа":
//
//    Класс Ученик создается со следующими характеристиками:
//        имя (string)
//возраст (int)
//один изучаемый предмет (string)
//уровень знаний (int)
//и методом:
//        учиться() - уровень знаний ученика повышается
//
//    Класс Учитель создается со следующими характеристиками:
//        имя (string)
//возраст (int)
//один преподаваемый предмет (string)
//и методом:
//        учить(обучаемого)
//
//    Класс Директор создается со следующими характеристиками:
//        имя (string)
//возраст (int)
//и методами:
//        объявить начало занятий
//        объявить окончание занятий занятий
//
//    Класс Школа создается со следующими характеристиками:
//        название - задается при создании объекта и не может быть изменено в последствии
//        директор - школа не может функционировать без директора
//        учителя[] - массив
//        ученики[] - массив
//    и методом:
//        день в школе() -
//1. директор объявляет начало занятий
//            2. учителя учат учеников (предмет учителя и ученика должны совпадать)
//            3. директор объявляет окончание занятий
//
//    Методы учить() и учиться() необходимо описать в разных интерфейсах
//    Общие свойства необходимо вынести в родительские классы (какие определить самостоятельно)
//    В классах можно добавлять методы и свойства при необходимости