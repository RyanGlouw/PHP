<?php
namespace Ifmo\Mvc\Controllers;

class BookController{

    public function books(){
        echo 'Страница с книгами';
    }

    public function bookById(){

        echo 'Страница книги с id = ' . $_GET['id'];
    }
}
