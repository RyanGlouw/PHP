<?php
class Arr {
    private $numbers = [];

    public function add($number){
        $this->numbers[] = $number;
        return $this;
    }
    public function append(){
        array_merge($this->numbers);
    }
    public function getSum(){
        return array_sum($this->numbers);
    }
}
?>