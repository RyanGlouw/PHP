<?php
$file_name = 'file.txt';

$data = "Данные для записи";
// запись данных в файл
if (file_put_contents($file_name, $data, FILE_APPEND | LOCK_EX) !== false) {
    echo 'Данные успешно записаны <br>';
}

$file_name = 'file2.txt';
$data = 'Данные для записи';
if (file_put_contents($file_name, $data . PHP_EOL, FILE_APPEND | LOCK_EX) !== false) {
    echo 'Данные успешно записаны с переносом строки<br>';
}

// чтение из файла в строку
$file_name = 'file.txt';
$str_from_file = file_get_contents($file_name);
echo $str_from_file;
// чтение файла в массив
$file_name = 'file2.txt';
$str_from_arr = file($file_name, FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);
var_dump($str_from_arr);