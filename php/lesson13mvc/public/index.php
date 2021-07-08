<?php
//единая точка входа
//сервер запускается из папки public
// все запросы перенаправляются на единую точку входа
require_once __DIR__ . '/../vendor/autoload.php';

// GET - IndexController index() Главная страница
// books GET - BookController books() - Все книги
// /book?id=12 GET - BookController bookById() - Книга по id
$router = new \Ifmo\Mvc\Routing\Router(require_once __DIR__ . '/../config/routs.php');
$router->run();