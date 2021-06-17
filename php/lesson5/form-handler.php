<?php
// обработка данных формы авторизации
$server = $_SERVER;
if ($server['REQUEST_METHOD'] === 'POST'){
    $post = $_POST;
    if ($post['login'] !== 'qwerty' || $post['password'] !== '123'){
        $answer = [
            'message' => 'error',
            'reason' => 'Ошибка ввода логина или пароля'
        ];
    } else {
        $answer = [
            'message' => 'success'
        ];
    }

    echo json_encode($answer);
}