fetch('/withJS/zoo.php')
.then(response => response.json())
.then(json => {
    console.log(json);
});
// создание html