<?php
session_start();
$server = $_SERVER;

if (isset($_SESSION['login'])){
    header('Location: account.php');
}

if ($server["REQUEST_METHOD"] === 'POST'){
    $post = $_POST;
    if (trim($post['login']) === 'qwerty' && trim($post['password']) === '123'){
        $_SESSION['login'] = $post['login'];
        header('Location: account.php');
    }else {
        $error = 'Ошибка авторизации';
    }
}
// строка запроса form.php
// заголовки: PHPSESSID: 02434tergthrtgrnherhgwereh
// тело сообщения:  login: ddd, password: ddd
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма авторизации</title>
</head>
<body>
<? if (isset($error)): ?>
<p><?= $error ?></p>
<? endif; ?>
<form method="post" action="form.php">
    <input type="text" placeholder="Введите логин" name="login">
    <input type="password" placeholder="Введите пароль" name="password">
    <input type="submit" value="Войти">
</form>

</body>
</html>
