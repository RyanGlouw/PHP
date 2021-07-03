<?php


class Pipil extends Person implements CanStudy
{
    private string $subject;
    private int $knowLegendLevel = 0;

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
    public function getSubject()
    {
        return $this->subject;
    }

    public function getKnowLegendLevel()
    {
        return $this->knowLegendLevel;
    }
    public function study()
    {
        $this->knowLegendLevel += 1;
    }
}