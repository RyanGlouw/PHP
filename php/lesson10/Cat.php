<?php


class Cat extends Animal
{

    public function run()
    {
        echo 'реализация в классе Cat';
    }

    public function jump(){

//        parent::jump(); значит что кот сначала прыгнет как в Animal записали а потом по другому
        echo "прыжки кота отличаются";
    }

}