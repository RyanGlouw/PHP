<?php
require_once 'Pizza.php';
require_once 'Order.php';
require_once 'Ingredient.php';

$ingr1 = new Ingredient();
$ingr1->setName('томат');
$ingr1->setCost(1000);

$ingr2 = new Ingredient();
$ingr2->setName('сыр');
$ingr2->setCost(150);

$ingr3 = new Ingredient();
$ingr3->setName('мясо');
$ingr3->setCost(250);


$pizza1 = new Pizza();
$pizza1->setName('Пепперони');
$pizza1->addIng($ingr1, $ingr2);

$pizza2 = new Pizza();
$pizza2->setName('Барбекю');
$pizza2->addIng($ingr2);

$pizza3 = new Pizza();
$pizza3->setName('Цезарь');
$pizza3->getName();
$pizza3->addIng($ingr1, $ingr2, $ingr3);

echo '<hr>';
$order1 = new Order();
$order1->setNumber(1);
$order1->setDate(07);
$order1->addEverythingPizza($pizza1);
var_dump($order1->getCountPizza(), $order1->getNumber(), $order1->getDate());
echo '<hr>';


$order2 = new Order();
$order2->setNumber(2);
$order2->setDate(06);
$order2->addEverythingPizza($pizza2);
var_dump($order2->getCountPizza(), $order2->getNumber(), $order2->getDate());
echo '<hr>';

$order3 = new Order();
$order3->setNumber(3);
$order3->setDate(05);
$order3->addEverythingPizza($pizza2, $pizza3);
var_dump($order3->getCountPizza(), $order3->getNumber(), $order3->getDate());
echo '<hr>';


