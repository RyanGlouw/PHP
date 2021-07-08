<?php
namespace Ifmo\Mvc\Controllers;
class IndexController {
//    запрос GET
    public function index(){
        echo $this->getPage('main.php', ['title' => 'Главная']);
    }

    public function getPage($content, array $data, $template = 'template.php'){
    extract($data);
    ob_start();
    include_once __DIR__ . '/../../templates/' . $template;
    $page = ob_get_contents();
    ob_end_clean();
    return $page;
    }
}