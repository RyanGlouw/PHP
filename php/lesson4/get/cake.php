<?php
$cakes = require_once 'cakes_data.php';

$get = $_GET;
$id = $get['id'];
if (!isset($id)){
    header("Location: cakes.php");
}
$cake = $cakes[$get['id']-1];
if (!isset($cake)){
    header("Location: cakes.php");
}if (gettype($cake) == is_string($cake)){
    header("Location: cakes.php");
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $cake['name'] ?></title>
    <link rel="stylesheet" href="/css/cake.css">
</head>
<body>
    <section class="cake">
        <div class="info">
            <h2><?= $cake['name'] ?></h2>
            <p><?= $cake['description'] ?></p>
            <p><?= $cake['price'] . $cake['currency']?></p>
        </div>

        <div class="img">
            <img alt="<?= $cake['name'] ?>" src="/img/<?= $cake['main_img'] ?>">
        </div>

        <div class="images">
            <? foreach ($cake['imgs'] as $img): ?>
            <img src= "/img/<?= $img ?>">
            <? endforeach; ?>
        </div>

        <div class="buy">
            <a href="#">Заказать</a>
        </div>
    </section>
</body>
</html>
