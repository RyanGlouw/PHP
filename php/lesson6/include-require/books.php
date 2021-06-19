<?php
require_once 'books-data.php';

$books = get_books();

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Книги</title>
</head>
<body>

<? include_once 'components/header.php' ?>
<? include_once 'components/header.php' ?>

<main>
    <? foreach ($books as $book): ?>
    Информация о книге
        <div>
            <h2><?= $book['title'] ?></h2>
        </div>
    <? endforeach; ?>
</main>

<? include 'components/footer.php' ?>
<? include 'components/footer.php' ?>
</body>
</html>