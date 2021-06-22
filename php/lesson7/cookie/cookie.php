<?php
// сначала уходят заголовки а потом тело сообщения
// куки передаются тоже в заголовки
setcookie('key', 'data', time() + 3600); // передаются в заголовки в паре имя_значение
$server = $_SERVER;
if ($server['REQUEST_METHOD'] === 'POST') {
    $post = $_POST;
    $user_color = $post['color'];
    setcookie('color', $user_color, time() + 3600);
    header('Location: cookie.php');
}elseif ($server['REQUEST_METHOD'] === 'POST')
var_dump($_COOKIE);

$background = $_COOKIE['color'] ?? 'blue';
?>


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Cookie</title>
</head>

<body style="background-color: <?= $background ?>">
<form action="cookie.php" method="post">
    <label for="change">Изменить цвет фона</label>
    <select id="change" name="color">
        <option value="red">Красный</option>
        <option value="yellow">Желтый</option>
        <option value="blue">Синий</option>
    </select>
    <input type="submit" value="Изменить цвет">
</form>
</body>

</html>