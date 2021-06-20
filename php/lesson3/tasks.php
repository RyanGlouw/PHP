<?php
//// 1. Напишите функцию, которая будет принимать на вход 3 аргумента
//// с типом float и возвращать минимальное значение.
//declare(strict_types=1);
//
//function get_min_num(float $num1, float $num2, float $num3){
//    return min($num1,$num2,$num3);
//}
//
//var_dump(get_min_num(1,2,3));
//
//
//// 2. Напишите функцию, которая принимает на вход два аргумента (типа int или float)
//// по ссылкам и умножает каждый из них на 2.
//
//function multiply_nums (int &$num1, float &$num2){
//    $num1 *= 2;
//    $num2 *= 2;
//}
//$multiplyNum1 = 2;
//$multiplyNum2 = 4;
//
//(multiply_nums($multiplyNum1,$multiplyNum2));
//
//echo $multiplyNum1;
//echo '<br>';
//echo $multiplyNum2;

function get_all_tasks(){
    return [
        [
            'title'=>'Задача 1',
            'date'=>date_create('yesterday'),
            'participants'=>['Артур', 'Полина'],
            'closed'=>false
        ],
        [
            'title'=>'Задача 2',
            'date'=>date_create('tomorrow'),
            'participants'=>[],
            'closed'=>false
        ],
        [
            'title'=>'Задача 3',
            'date'=>date_create('tomorrow'),
            'participants'=>['Артур', 'Глеб'],
            'closed'=>false
        ],
        [
            'title'=>'Задача 4',
            'date'=>date_create(),
            'participants'=>['Павел', 'Полина'],
            'closed'=>true
        ]
    ];
}
// Задача 3:
// Написать функцию, которая принимает массив и возвращает новый массив,
// в который войдут (выбрать один любой вариант):
// 3.1. новые задачи (Дата задачи > date_create())
// 3.2. закрытые задачи (со значением closed === true)
// 3.3. невыполненные задачи (со значением closed === false и датой меньше date_create())

//function get_closed_tasks($array){
//    $result = [];
//    foreach ($array as $task){
//        if($task['date'] > date_create()){
//            $result[] = $task;
//        }
//    }
//    return $result;
//}
//var_dump(get_closed_tasks(get_all_tasks()));

function get_closed_tasks($array){

    $new_arr = [];
    foreach($array as $element){
        if($element['date'] > date_create()){
            $new_arr[] = $element;
        }
    }
    return $new_arr;
}

var_dump(get_closed_tasks(get_all_tasks()));

// Задача 4:
// Написать функцию, которая принимает массив и возвращает новый массив,
// в который войдут задачи, в которых имя участника равно значению $name:

//function get_tasks_by_name($array, $name){
//    $return_names = [];
//    foreach ($array as $tasks){
//        foreach ($tasks['participants'] as $names){
//            if ($names === $name){
//                $return_names[] = $tasks;
//            }
//        }
//    }
//    return $return_names;
//}
//var_dump(get_tasks_by_name(get_all_tasks(),'Артур'));