<?php
require_once 'Students.php';

$user = new User('Иванов', 'Иван', 'Иванович');

$props = ['surname', 'name', 'patronymic'];
echo $user->{$props[0]}; // выведет 'Иванов'
echo $user->{$props[1]}; // выведет 'Иванов'
echo $user->{$props[2]}; // выведет 'Иванов'


