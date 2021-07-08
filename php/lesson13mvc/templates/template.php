<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
</head>
<body>
<header>
    <nav>
    <a href="/">Главная</a>
    <a href="/books">Книги</a>
    </nav>
</header>

<main>
    <? include_once $content ?>
</main>

<footer>Подвал</footer>
</body>
</html>