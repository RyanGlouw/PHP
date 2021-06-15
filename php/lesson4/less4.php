<?php
$server = $_SERVER;// как узнать каким методом получаем данные
if ($server['REQUEST_METHOD'] === 'GET'){
    $get = $_GET;
    $price = $get['price'];
    $count = $get['count'];
    var_dump($price,$count);
}

?>

<a href="http://localhost:8080/less4.php?price=2300&count=7">
    GET Запрос
</a>
