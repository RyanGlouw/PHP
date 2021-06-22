<?php
require_once 'Students.php';

$arr = new Arr;
echo $arr->add(1)->append([2, 3, 4])->add(5)->getSum();
