<?php
session_start();
$server = $_SERVER;

if (!isset($_SESSION['login'])){
    header("Location: form.php");
}

$login = $_SESSION['login'];
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<nav>
    <a href="index.php">Главная</a>

    <a href="logout.php">Выйти</a>


</nav>
<h2><?= $login ?>, Добро пожаловать в ЛК</h2>

</body>
</html>
