<?php

 Выведите 23 сентября 2031 года, 12:58:59 в формате timestamp.

 echo mktime(12, 58, 59, 9, 23, 2031);



 Найдите разницу между 1 сентября 2010 года, 7:25:59 и текущим моментом времени
 в секундах

 echo time() - strtotime('2010-09-01 7:25:59');



 Выведите текущую дату-время в формате '2025.12.31 12:59:59'.

 echo date('Y-m-d H:i:s');



 Выведите 1-го сентября текущего года в формате '2021.09.01'.

 echo date('Y-m-d',mktime(0,0,0,1,9,2021));



 Узнайте, какой день недели (словом) был 1 сентября 2010 года.

 $week = ['вскр','пн','вт','ср','чт','пт','cб'];

 $day = date('w',mktime(0,0,0,1,9,2021));
 echo $week[$day];




Дана дата в формате '31-12-2025'. С помощью функций mktime и explode
  переведите эту дату в формат timestamp.

 $date = explode('-','31-12-2025');
 var_dump(mktime(0,0,0,$date[0],$date[1],$date[2]));



 Найдите количество целых часов, прошедших с 7:23:48 текущего дня до настоящего
 момента времени.

 $time = time() -  mktime(7,23,48);
 $minutes = $time / 60;
 $hours = $minutes / 60;
 echo $hours;




 Создайте массив дней недели $week. Выведите на экран название текущего дня недели
 с помощью массива $week и функции date. Узнайте какой день недели был 06.06.2006,
 в ваш день рождения.

 $week = ['вскр','пн','вт','ср','чт','пт','cб'];

 echo $week[date('w',mktime(0,0,0,10,22,1994))];




 Найдите количество дней в текущем месяце. Скрипт должен работать независимо от месяца,
  в котором он запущен.

 echo date('t');

 Сделайте поле ввода, в которое пользователь вводит год (4 цифры),
  а скрипт определяет високосный ли год.

?>

<!--<!-- <form action="" method="POST">-->
<!--<input type="text" name="year" placeholder="Введите год (4 цифры)">-->
<!--<button type="submit" name="submit" >Отправить</button>-->
<!--</form> -->-->


<?php
 if(isset($_REQUEST['year'])){
 $gateAge = $_POST['year'];
 $value = date('L',mktime(0,0,0,1,1,$gateAge));
 if($value == 1){
     echo 'Вы ввели високосный год';
 } else echo 'Вы ввели не високосный год';
 }
?>



Сделайте форму, которая спрашивает дату в формате '31.12.2025'. С помощью функций mktime
и explode переведите эту дату в формат timestamp. Узнайте день недели (словом) за введенную дату.

<form action="" method="POST">
    <input type="text" name="date" placeholder="Введите дату">
    <button type="submit" name="submit" >Отправить</button>
</form>
<?php
$week = ['вскр','пн','вт','ср','чт','пт','cб'];
if(isset($_REQUEST['submit'])){
    $date = explode('.',$_POST['date']);
    $dayOfWeek = date(w,mktime(0,0,0,$date[1]));
    echo $week[$dayOfWeek];
}
?>

Сделайте форму, которая спрашивает две даты в формате '2025-12-31'. Первую дату запишите в переменную
$date1, а вторую в $date2. Сравните, какая из введенных дат больше. Выведите ее на экран.

<form action="" method="POST">
    <input type="text" name="dateFirst" placeholder="Введите дату1">
    <input type="text" name="dateSeckond" placeholder="Введите дату2">
    <button type="submit" name="submit" >Отправить</button>
</form>
<?php
if(isset($_REQUEST['submit'])){
    $firstDate = $_POST['dateFirst'];
    $seckondDate = $_POST['dateSeckond'];
    if($firstDate > $seckondDate){
        echo 'Дата ' . $firstDate . ' больше чем ' . $seckondDate;
    }else echo 'Дата ' . $seckondDate . ' больше чем ' . $firstDate;;
}



//Дана дата в формате '2025-12-31'. С помощью функции strtotime и функции date преобразуйте ее в формат '31-12-2025'.
$date = strtotime('2025-12-31');
$changeDate = date("d-m-Y",$date);
echo $changeDate;


//В переменной $date лежит дата в формате '2025-12-31'.
//Прибавьте к этой дате 2 дня, 1 месяц и 3 дня, 1 год. Отнимите от этой даты 3 дня.

$date = date_create('2025-10-31');
date_modify($date, '2 day 1 month 1 day 1 year');
echo date_format($date, 'Y-m-d');
