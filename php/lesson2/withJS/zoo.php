<?php

$animals = require_once $_SERVER['DOCUMENT_ROOT'] . '/data/animals-data.php'; // подключение одного файла в другой
$user_data = require_once $_SERVER['DOCUMENT_ROOT'] . '/data/user-data.php';

$response = [
    'user' => $user_data,
    'animals' => $animals
];

echo json_encode($response);

