<?php
require_once 'Person.php';
require_once 'Developer.php';

$person = new Person('reson@mail.ru');
$person->setAge(18);
echo $person->getAge();
$dev = new Developer('reson@mail.ru', 4);
