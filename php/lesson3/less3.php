<?php
//function
//именованные функции можно и до и после обьявлять
//вернуть из функции можно 1 значение, если несколько то массив

declare(strict_types=1); // режим строгой типизации

function getSum(int $num1, int $num2)
{
    return $num1 + $num2;
} // после именованных функ ставить ; не надо

var_dump(getSum(1, 2));

function greeting($name = 'Guest')
{
    return "<h1>$name</h1>";
}

echo greeting('Max');
echo greeting();

function greeting2($email, $name = 'Guest')
{
    return "<h1>Hello: $name</h1>
        <p>Your email: $email</p>";
}

echo greeting2('@mail.ru');

// избыток аргументов не проблема

function add_word(string &$name)
{
    $name .= ' Большой ';
}
$name = 'Глеб';
add_word($name);
$some_var = 'Торт';
add_word($some_var);

var_dump($name);
var_dump($some_var);

// по умолчанию изменить значение аргумента
// не изменить в функции, для этого надо добавить к аргументу &

function division($a, $b){
    if ($b === 0) return false;
    return $a / $b;
}

$num = 9;
$num1 = 0;

var_dump(division($num, $num1));

var_dump((division(6,2)));

function get_data(){
    return ['Глеб', 20];
}
/*$data = get_data();
$name = $data[0];
$age = $data[1];*/

list($name, $age) = get_data(); // присваивает переменным значения подобные массиву
var_dump(get_data());

function sum(...$nums){
    $acc = 0;
    foreach ($nums as $num){
        $acc += $num;
    }
    return $acc;
}
var_dump(sum(1,2,3,4));

function create_greeting(string $name='Guest') {
    return "<h2>Welcome, $name</h2>";
}
echo create_greeting();
$func_name = 'create_greeting'; // присваивание к переменной динамическую функцию
echo $func_name();

// Anon func

$sqrt = function (int $a){
    return $a * $a;
};

var_dump($sqrt(10));

function change_arr(array &$arr, callable $action){ // callable $action функция принимает на вход другую функцию
    foreach ($arr as &$item){
        $item = $action($item);
    }

}
$array = [0,-2,3];
change_arr($array, $sqrt);
var_dump($array);

change_arr($array, function ($a) {
    return $a + 10;
});
var_dump($array);