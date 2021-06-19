<?php

$tours = [
    [
        'id' => 1,
        'city' => 'Лондон',
        'price' => 3600,
        'country' => 'Великобритания',
        'img' => 'london.jpd'
    ],
    [
        'id' => 2,
        'city' => 'Осло',
        'price' => 2800,
        'country' => 'Норвегия',
        'img' => 'oslo.jpg'
    ],
    [
        'id' => 3,
        'city' => 'Сидней',
        'price' => 4100,
        'country' => 'Австралия',
        'img' => 'sidney.jpg'
    ],
    [
        'id' => 4,
        'city' => 'Канберра',
        'price' => 3900,
        'country' => 'Австралия',
        'img' => 'canberra.jpg'
    ]
];

$server = $_SERVER;
if ($server['REQUEST_METHOD'] === 'GET') {
//    echo json_encode($tours); // json_encode преобразует json в строку - json сериализация
    $get = $_GET;
    if (isset($get['country'])) {
        echo json_encode(get_tours_by_country($get['country']));
    }else{
        echo json_encode($tours);
    }

}