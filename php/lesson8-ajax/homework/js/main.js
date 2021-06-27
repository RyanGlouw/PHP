const form = document.forms.auth;

form.addEventListener('submit', (event)=> {
    event.preventDefault();

    const options = {
        method: 'POST',
        body: new FormData(form)
    };
    fetch('index.php', options)
        .then(response => response.json())
        .then(data => {
            if (data.message === 'error'){
                document.getElementById('auth-error').innerText = 'Такой логин уже присутствует';
            }else if (data.message === 'success'){
                document.getElementById('auth-error').innerText = 'Успешно';
            }
        });
});