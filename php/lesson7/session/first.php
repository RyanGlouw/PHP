<?php
session_start(); // запускать только в самом верху
// session_start(['read_and_close'=>true]);

$_SESSION['data'] = 'Данные сессии';
// session_write_close();


?>

<? include_once 'components/menu.php' ?>