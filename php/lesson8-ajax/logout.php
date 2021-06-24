<?php
session_start();
unset($_SESSION['login']);
// еще варианты $_SESSION = []; session_destroy();
setcookie('PHPSESSID', null, -1);
header('Location: index.php');
