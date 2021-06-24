<?php
session_start();


?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>
</head>
<body>

<nav>
    <? if (isset($_SESSION['login'])): ?>
        <a href="logout.php">Выйти</a>
    <? else: ?>
        <a href="form.php">Войти</a>
    <? endif; ?>
</nav>


<h2>Lorem ipsum</h2>
<p>
    Lorem  Lorem  Lorem  Lorem
</p>
<? if (isset($_SESSION['login'])): ?>
<textarea></textarea>
<input type="button" value="Добавить комментарии">
<? endif; ?>
</body>
</html>
