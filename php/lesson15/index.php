<?php

$server = 'localhost';
$port = '3306';
$user = 'root';
$pwd = '';
$db_name = 'library';

$conn_str = "mysql:host=$server;port=$port;dbname=$db_name";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

$connection = new PDO($conn_str, $user, $pwd, $options);
var_dump($connection);

//$sql = 'SELECT * FROM tb_books';
//$statement = $connection->query($sql);
//$result = $statement->fetchAll(PDO::FETCH_ASSOC);
//var_dump($result);

//$sql = 'INSERT INTO tb_books(title, author) VALUE (\'Новая книга\', \'Автор книги\')';
//if ($connection->exec($sql)){
//    echo 'Done';
//}else {
//   echo 'No';
//}

$title = 'Грокаем алгоритмы';
//$sql = 'SELECT author,title FROM tb_books WHERE title=:book_title';
//$params = [
//    'book_title' => $title
//];
//$statement = $connection->prepare($sql);
//$statement->execute($params);
//$result = $statement->fetch(PDO::FETCH_ASSOC);
//var_dump($result);