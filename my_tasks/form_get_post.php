<!-- Спросите имя пользователя с помощью формы. Результат запишите в переменную $name. Выведите на экран фразу 'Привет, %Имя%'. Показать решение. -->

<form action="" method="POST">
    <input type="text" name="name" placeholder="Введите ваше имя">
    <input type="submit">
</form>

<?php
if (isset($_REQUEST['name'])) {
    $name = $_REQUEST['name'];
    echo 'Привет ' . $name;
}
?>

<!-- Спросите возраст пользователя. Если форма была отправлена и введен возраст, то выведите его на экран, а форму уберите.
Если же форма не была отправлена (это будет при первом заходе на страницу) - просто покажите ее. Показать решение. -->

<?php
if (!isset($_REQUEST['age'])) {;
?>
    <form action="" method="POST">
        <input type="text" name="age" placeholder="Введите ваш возраст"><br><br>
        <input name="submit" type="submit">
    </form>

<?php
}
?>

<?php
if (isset($_REQUEST['age'])) {
    $age = strip_tags($_REQUEST['age']);
    echo 'Ваш возраст ' . $age;
}
?>


<!-- Спросите у пользователя логин и пароль (в браузере должен быть звездочками). Сравните их с логином $login и паролем $pass, хранящихся в файле.
Если все верно - выведите 'Доступ разрешен!', в противном случае - 'Доступ запрещен!'. Сделайте так, чтобы скрипт обрезал концевые пробелы в строках, которые ввел пользователь. Показать решение. -->

<?php
if (!isset($_REQUEST['submit'])) {
?>
    <form action="" method="POST">
        <input type="login" name="login" placeholder="Введите ваш логин"><br><br>
        <input type="password" name="password" placeholder="Введите ваш пароль"><br><br>
        <input name="submit" type="submit">
    </form>

<?php
}
?>

<?php
if (isset($_REQUEST['submit'])) {
    $login = 'qwe';
    $password = 123;
    $formLogin = trim($_REQUEST['login']);
    $formPassword = trim($_REQUEST['password']);
    if ($login == $formLogin && $password == $formPassword) {
        echo 'Доступ разрешен!';
    } else echo 'Доступ запрещен!';
}
?>

<!-- Атрибуты value и placeholder
Спросите имя пользователя с помощью формы. Результат запишите в переменную $name. Сделайте так,
чтобы после отправки формы значения ее полей не пропадали. Показать решение. -->

<form action="" method="POST">
    <input type="text" name="name" placeholder="Введите ваше имя" value="/*<?php if (isset($_REQUEST['name'])) echo $_REQUEST['name']; ?>">
    <input type="submit">
</form>

<?php
if (isset($_REQUEST['name'])) {
    $name = $_REQUEST['name'];
    echo 'Привет ' . $name;
}
?>

<!-- Спросите у пользователя имя, а также попросите его ввести сообщение (textarea). Сделайте так,
чтобы после отправки формы значения его полей не пропадали. -->

<form action="" method="GET">
    <input type="text" name="name" placeholder="Введите ваше имя" value="<?php if (isset($_GET['name'])) echo $_GET['name']; ?>"><br><br>
    <textarea name="message"><?php if (isset($_GET['message'])) echo $_GET['message']; ?></textarea><br><br>
    <input type="submit">
</form>