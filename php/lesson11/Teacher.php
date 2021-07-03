<?php


class Teacher extends Person implements Teaching
{
 private string $subject;

 // это дублирующийся код, его нужно избегать например через наследование
    public function __construct(string $subject)
    {
        $this->setSubject($subject);
    }

    public function setSubject(string $subject)
    {
        if (strlen($subject) < 3){
            echo 'Название предмета должно быть не менее 3 букв';
            return false;
        }
        $this->subject = $subject;
        return true;
    }

    public function getSubject(){
        return $this->subject;
    }

    public function teach(CanStudy $student)
    {
        $student->study();
    }
    public function setAge(int $age){
        if ($age < 18){
            echo 'Учителю должно быть не менее 18 лет';
            return false;
        }
        $this->age = $age;
        return true;
}
}