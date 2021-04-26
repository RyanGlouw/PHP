<?php

$driver = 'mysql';
$host = 'localhost';
$db_name = 'site_project';
$db_user = 'root';
$db_pass = '';


try{
    $pdo = new PDO("mysql:host=localhost;dbname=".$db_name.";charset=utf8",$db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    die("Нет подключения к базе данных");
}
$result = $pdo->query('SELECT * FROM users');
while($row = $result->fetch(PDO::FETCH_ASSOC) ){
    echo 'Пользователь' . $row['login'] . $row['password'];
}