<?php
//class User {
//    public $age;
//    public $name;
//
//    public function setAge($age){
//        if ($this->isAgeCorrect($age)){
//            $this->age = $age;
//        }
//    }
//    public function addAge($years){
//        $newAge = $this->age + $years;
//        if ($this->isAgeCorrect($newAge)){
//            $this->age = $newAge;
//        }
//    }
//    public function subAge($minus){
//        $minusAge = $this->age - $minus;
//        if ($this->isAgeCorrect($minusAge)){
//            $this->age = $minusAge;
//        }
//    }
//
//    private function isAgeCorrect($age){
//        return $age >=18 && $age <= 60;
//    }
//}
//
//$user = new User();
//$user->setAge(30);
//echo '<br>';
//echo $user->age;
//$user->addAge(32);
//echo '<br>';
//echo $user->age;
//echo '<br>';
//$user->subAge(10);
//echo $user->age;

//class Student{
//    public $name;
//    public $course;
//
//
//
//    public function transferToNextCourse($course){
//        if($this->isCourseCorrect($course)){
//        $this->course = $course;
//    }
//    }
//
//    private function isCourseCorrect($course){
//        return $course <= 5;
//    }
//}
//$student1 = new Student();
//$student1->transferToNextCourse(6);
//echo $student1->course;

class Employee{
    private  $name;
    private  $age;
    private  $salary;

    public function getSalary(){
        return $this->salary . '$';
    }

    public function setSalary($salary){
        if ($this->isSalaryCorrect($salary)){
            $this->salary = $salary;
        }
    }

    private function isSalaryCorrect($salary){
        return $salary >= 1 && $salary <= 1000;
}

}
$Employee1 = new Employee();
$Employee1->setSalary(1000);
echo $Employee1->getSalary();