<?php

return [
    '/' => [
        'method' => 'GET',
        'controller' => 'Ifmo\Mvc\Controllers\IndexController::index'
    ],
    '/books' => [
        'method' => 'GET',
        'controller' => 'Ifmo\Mvc\Controllers\BookController::books'
    ],
    '/book' => [
        'method' => 'GET',
        'controller' => 'Ifmo\Mvc\Controllers\BookController::bookById'
    ]
];