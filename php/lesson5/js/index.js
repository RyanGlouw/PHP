'use strict';
// аякс: отправка запроса на получение туров методом GET

fetch('tours-data.php')
    .then(response => response.json()) // когда сервер вернет ответ функция начнет работу и будет передан обьект ответа
    .then(jsonData => console.log(jsonData));

document.getElementById('search').addEventListener('click', () => {
    let input = document.querySelector('input[type="search"]');
    fetch(`tours-data.php?country=${input.value}`)
        .then(response => response.json()) // когда сервер вернет ответ функция начнет работу и будет передан обьект ответа
        .then(jsonData => console.log(jsonData));
});
