<?php
$post = $_POST;
var_dump($post['user_name']);
// обработчик данных формы
$files = $_FILES;
var_dump($files['picture']);

$tmp_name = $files['picture']['tmp_name'];
$file_name = $files['picture']['name'];

$ext = pathinfo($file_name, PATHINFO_EXTENSION);

$file_name = md5(microtime() . $file_name) . ".$ext" ;
echo $file_name;



// перед тем как перемещать файл нужно проверить на тип, размер и наличие ошибок загрузки
// через if-ы

if (move_uploaded_file($tmp_name, "images/$file_name")) {
    echo 'files success loaded';
}else 'No';
