## Арифметические операторы `+`, `-`, `*`, `/`, `%`, `**` - возведение в степень, `.` - конкатенация строк

## Операторы присваивания `=`, `+=`, `-=`, `*=`, `/=`, `%=`, `.=`, `**=`

## Инкремент `++` и декремент `--`

## Операторы сравнения `>`, `<`, `>=`, `<=`, `==`, `===`, `!=`, `!==`, `<=>` - spaceship (с версии 7.0)
    90 <=> 90 // 0
    44 <=> 90) // -1
    90 <=> 44 // 1
    '90' <=> 90 // 0
Результат работы оператора <=> - тип int (-1, 0, 1), остальных - тип boolean (true, false)

## Логические операторы `&&` `and` - и, `||` `or` - или, `!` - не, `xor` - исключающее или (возвращает true, если один из операндов true, но не оба)
    $a = 55;
    $b = 45;
    $a === 55 xor $b === 45 // false



## Тернарный оператор ? `результат = условие ? значение 1 : значение 2;`
    $a = 23;
    $b = 100;
    $c = 12;
    $result = $a <= $c && $c <= $b ? 'YES' : 'NO'; // NO

## Проверка на null и присваивание значения по умолчанию
    $login;
    $login = isset($login) ? $login : 'Гость'; // Гость

## Оператор объединения с null ??. Проверка на null и присваивание значения по умолчанию (с версии 7.0)
    $login;
    $login = $login ?? 'Гость';  // Гость
    
    
    


