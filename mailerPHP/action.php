<?php

require 'pathtoPHPMailer/src/Exception.php';
require 'pathtoPHPMailer/src/PHPMailer.php';
require 'pathtoPHPMailer/src/SMTP.php';
require 'pathtoPHPMailer/src/OAuth.php';
require 'pathtoPHPMailer/src/POP3.php';

use PHPMailer\PHPMailer\PHPMailer; // подключение php mailer класса

$username = 'ttestp1@mail.ru';
$password = 'nEAoyYrK43x(';
$mailTo = 'ryantodd1176@gmail.com';
$subject = 'PHPMailer file sender';

$name = $_POST['first-name']; // постом пловит текстовые инпуты

$mailer = new PHPMailer;
$mailer->isSMTP();
$mailer->Host = 'smtp.mail.ru';
$mailer->SMTPAuth = true;
$mailer->Username = $username; // логин почты от которой идет отправка
$mailer->Password = $password; // пароль почты от которой идет отправка
$mailer->SMTPSecure = 'ssl';
$mailer->Port = 465; // порт почты с которой идет отправка (в каждой почте порт разный этот от mail ru)
$mailer->CharSet = 'UTF-8'; // кодировка для правильного отображения названия полученных файлов
$mailer->setFrom($username); // с какой почты
$mailer->addAddress($mailTo); // на какую почту идет отправка
$mailer->Subject = $subject; // тема письма
$mailer->Body = 'Hello, ' . $name; // тело письма

$message = ''; // информация о статусе отправки письма

$requiredFileNames = [ // массив куда ловим полученные файлы 1- name инпута 2- переименовывание файла
    'userfile' => 'паспорт 1',
    'userfile1' => 'паспорт 2',
];

$notExistedRequiredFiles = [];
foreach ($requiredFileNames as $requiredFileName => $fileLabel) {
    if (!array_key_exists($requiredFileName, $_FILES)) { // если массив requiredFileNames не имеет ключей то добавить их
        $notExistedRequiredFiles[] = $requiredFileName;
    }
}

if (!empty($notExistedRequiredFiles)) { // проверка на то что все файлы не получены
    $notExistedRequiredFileNames = implode(', ', $notExistedRequiredFiles);
    echo "Обязательные файлы $notExistedRequiredFileNames не переданы"; exit;
}

foreach ($requiredFileNames as $requiredFileName => $fileLabel) {
    $filePath = $_FILES[$requiredFileName]['tmp_name']; // переменная куда заносим массив с временной папкой фалов
    $ext = PHPMailer::mb_pathinfo($_FILES[$requiredFileName]['name'], PATHINFO_EXTENSION); 
    if (!$mailer->addAttachment($filePath, "$fileLabel.$ext")) {
        $message .= "Failed to attach file $filePath <br>" ;
        echo $message; exit;
    }
}

if (!$mailer->send()) {
    $message .= "Mailer Error: {$mailer->ErrorInfo}";
} else {
    $message .= 'Message sent!';
}

echo $message;
