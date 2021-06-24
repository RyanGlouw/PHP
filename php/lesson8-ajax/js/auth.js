const form = document.forms.auth;

form.addEventListener('submit', (event)=> {
    event.preventDefault();

    const options = {
        method: 'POST',
        body: new FormData(form)
    };
    fetch('form-handler.php', options)
        .then(response => response.json())
        .then(data => {
           if (data.message === 'error'){
               document.getElementById('auth-error').innerText = 'Ошибка авторизации';
           }else if (data.message === 'success'){
               window.location.href = 'account.php';
           }
        });
});