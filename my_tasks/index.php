<?php
require_once 'Students.php';

$student = new Student('Коля');
echo $student->getCourse();
$student->transferToNextCourse();
echo $student->getCourse();
$student->transferToNextCourse();
echo $student->getCourse();
