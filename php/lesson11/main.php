<?php

require_once 'CanStudy.php';
require_once 'Teaching.php';
require_once 'Person.php';
require_once 'Pipil.php';
require_once 'Teacher.php';
require_once 'Headmaster.php';
require_once 'School.php';

$pupils = [new Pipil('Математика'),new Pipil('Информатика'),new Pipil('История')];

$teachers = [new Teacher('Математика'),new Teacher('Информатика'),new Teacher('ОБЖ')];

$headmaster = new Headmaster();

$school = new School('Имени Ленина', $headmaster, $teachers, $pupils);
$school->dayOfSchool();
var_dump($school);

