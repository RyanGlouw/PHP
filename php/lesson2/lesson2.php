<?php
// ЗАДАЧА 1
// Дан массив $numbers
//$numbers = [5, 78, -200, 89, -14, 0, 73, -33, -4];
//
//// Объявить новый массив, в который войдут только положительные числа из $numbers
//
//$posNum = [];
//
//foreach ($numbers as $number){
//    if($number > 0){
//        $posNum[] = $number;
//    }
//}
//var_dump($posNum);

// ЗАДАЧА 2
// Дан массив $tours.
$tours = [
    [
        'id' => 1,
        'city' => 'Лондон',
        'price' => 3600,
        'country'=> 'Великобритания'
    ],
    [
        'id' => 2,
        'city' => 'Осло',
        'price' => 2800,
        'country'=> 'Норвегия'
    ],
    [
        'id' => 3,
        'city' => 'Сидней',
        'price' => 4100,
        'country'=> 'Австралия'
    ],
    [
        'id' => 4,
        'city' => 'Канберра',
        'price' => 3900,
        'country'=> 'Австралия'
    ]
];
// Увеличить стоимость каждого тура на 10%. Для австралийских туров на 12%

foreach ($tours as $key => $tour){
    if($tour['country'] != 'Австралия'){
        $tour['price'] *= 1.10;
    }elseif ($tour['country'] == 'Австралия') {
        $tour['price'] *= 1.12;
    }
    var_dump($tour['price']);
}

// Вывести в html информацию о товарах:
$items = [
    [
        'id' => 1,
        'title' => 'Flute',
        'price' => 20000,
        'img' => 'flute.jpg',
        'description' => [
            'color' => 'white',
            'material' => 'bamboo'
        ]
    ],
    [
        'id' => 2,
        'title' => 'Guitar',
        'price' => 18000,
        'img' => 'guitar.jpg',
        'description' => [
            'color' => 'brown',
            'material' => 'linden'
        ]
    ],
    [
        'id' => 3,
        'title' => 'Drum',
        'price' => 68000,
        'img' => 'drum.jpg',
        'description' => [
            'color' => 'brown',
            'material' => 'steel'
        ]
    ],
];

