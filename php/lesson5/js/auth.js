'use strict';
// аякс: отправка данных формы методом POST

const form = document.forms.auth;

form.addEventListener('submit', (event) => {
    event.preventDefault();
    const requestOptions = {
        method: 'POST', // http метод
        body: new FormData(form)

        //    {login: 'qqqqqqq', password: 'qqqqqq'}
    };
    fetch('form-handler.php', requestOptions)
        .then(response => response.json())
        .then(data => {
            if (data.message === 'error') {
                document.getElementById('auth-error')
                    .innerText = data.reason;
            } else if (data.message === 'success') {
                window.location.href = 'tours.html';
            }
        });
});