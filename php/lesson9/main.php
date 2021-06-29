<?php
require_once 'Author.php';
require_once 'Article.php';
require_once 'Storage.php';

$oleg = new Author();
$misha = new Author();

$oleg->name = 'Олег';
$misha->name = 'Миша';
$oleg->rating = 4;
//var_dump($oleg, $misha);

$php = new Article($oleg, 'PHP 8');
$js = new Article($misha, 'Vue');

//var_dump($php, $js);

$storage = new Storage();
$storage->add_article($js);
var_dump($storage->articles);

