<?php

$server = $_SERVER;
$fileName = 'file.txt';
$flag = false;

if ($server['REQUEST_METHOD'] === 'POST'){
    $post = $_POST;
    $data = $post['login'] . PHP_EOL . $post['password'] . PHP_EOL;
    $strFromArr = file($fileName, FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);

    if (empty($strFromArr)){
        file_put_contents($fileName,$data,FILE_APPEND | LOCK_EX);
        $answer = ['message' => 'success'];
    }else {
        foreach ($strFromArr as $reg) {
            if ($post['login'] === $reg) {
                $answer = ['message' => 'error'];
                $flag = true;
                break;
            }

        }
        if ($flag === false){
            file_put_contents($fileName, $data, FILE_APPEND | LOCK_EX);
            $answer = ['message' => 'success'];
        }
    }

    echo json_encode($answer);
}

