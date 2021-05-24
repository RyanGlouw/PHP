<?php

require 'pathtoPHPMailer/src/Exception.php';
require 'pathtoPHPMailer/src/PHPMailer.php';
require 'pathtoPHPMailer/src/SMTP.php';
require 'pathtoPHPMailer/src/OAuth.php';
require 'pathtoPHPMailer/src/POP3.php';

use PHPMailer\PHPMailer\PHPMailer;

$username = 'ttestp1@mail.ru';
$password = 'nEAoyYrK43x(';
$mailTo = 'ryantodd1176@gmail.com';
$subject = 'PHPMailer file sender';

$name = $_POST['first-name'];

$mailer = new PHPMailer;
$mailer->isSMTP();
$mailer->Host = 'smtp.mail.ru';
$mailer->SMTPAuth = true;
$mailer->Username = $username;
$mailer->Password = $password;
$mailer->SMTPSecure = 'ssl';
$mailer->Port = 465;
$mailer->CharSet = 'UTF-8';
$mailer->setFrom($username);
$mailer->addAddress($mailTo);
$mailer->Subject = $subject;
$mailer->Body = 'Hello, ' . $name;

$message = '';

$requiredFileNames = [
    'userfile' => 'паспорт 1',
    'userfile1' => 'паспорт 2',
];

$notExistedRequiredFiles = [];
foreach ($requiredFileNames as $requiredFileName => $fileLabel) {
    if (!array_key_exists($requiredFileName, $_FILES)) {
        $notExistedRequiredFiles[] = $requiredFileName;
    }
}

if (!empty($notExistedRequiredFiles)) {
    $notExistedRequiredFileNames = implode(', ', $notExistedRequiredFiles);
    echo "Обязательные файлы $notExistedRequiredFileNames не переданы"; exit;
}

foreach ($requiredFileNames as $requiredFileName => $fileLabel) {
    $filePath = $_FILES[$requiredFileName]['tmp_name'];
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
