<?php

$animals = require_once $_SERVER['DOCUMENT_ROOT'] . '/data/animals-data.php'; // подключение одного файла в другой
$user_data = require_once $_SERVER['DOCUMENT_ROOT'] . '/data/user-data.php';

// SERVER супер-глобальный массив который хранит инфо о сервере(что за сервер, когда пришел запрос и тд
// DOCUMENT_ROOT - корневая директория что бы подключаться из корневой директории

// если мы отрисовываем в html в цикле то делаем альтернативный if endif или foreach endforeach
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Зверинец</title>
</head>
<body>
<section>
    <h2>Все животные</h2>

    <? foreach ($animals as $animal): ?>

        <div>
            <h3><?= $animal['name'] ?></h3>
            <div>
                <img height="200px" src="/img/<?= $animal['img'] ?>">
            </div>

            <? if($user_data['role'] === 'admin'): ?>
            <button>Перейти к редактированию</button>
            <? endif;?>
        </div>

    <? endforeach; ?>
</section>
</body>
</html>
