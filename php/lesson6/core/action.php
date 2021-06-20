<?php

$images = $_FILES['images'];

$normalizeImages = [];

foreach ($images as $key_name => $value) {
    foreach ($value as $key => $item) {
        $normalizeImages[$key][$key_name] = $item;
    }

}

function upload_files($normalizeImages)
{
    foreach ($normalizeImages as $image) {
        $img = $image;
        $types = ["image/jpeg", "image/png"];

        if (!in_array($image['type'], $types)) {
            echo "Файл " . "<b>" . $image['name'] . "</b>" . " не загружен т.к не соответствует расширению. Загрузите JPG или PGN" . "<br>";
        }
        $fileSize = $image["size"] / 1000000;
        $maxSize = 1;

        if ($fileSize > $maxSize) {
            echo "Файл " . "<b>" . $image['name'] . "</b>" . " не загружен т.к его размер больше 1 Мегабайта" . "<br>";
        }
        if (!is_dir('../uploads')) {
            mkdir('../uploads', 0777, true);
        }
        if ($image['error'] !== 0) {
            echo "Ошибка загрузки, попробуйте еще раз" . "<br>";
        }

        $extension = pathinfo($img["name"], PATHINFO_EXTENSION);
        $fileName = md5(microtime() . $img['name']) . ".$extension";

        if (in_array($image['type'], $types) && $fileSize < $maxSize) {
            move_uploaded_file($img['tmp_name'], "../uploads/$fileName");
            echo "Файл " . "<b>" . $image['name'] . "</b>" . " Успешно загружен" . "<br>";

        }

    }
}

echo upload_files($normalizeImages);