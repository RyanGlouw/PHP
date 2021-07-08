<?php
namespace Ifmo\Mvc\Routing;

use Ifmo\Mvc\BookControllers\ErrorController;

class Router {
    private array $routs;
    private string $uri;

    public function __construct(array $routs)
    {
        $this->routs = $routs;
        $this->uri = explode('?', $_SERVER['REQUEST_URI'])[0];
    }

    public function run(){
        if (isset($this->routs[$this->uri]) &&
        $_SERVER['REQUEST_METHOD'] === $this->routs[$this->uri]['method']) {
            $handler = explode('::', $this->routs[$this->uri]['controller']);
           $class = $handler[0];
           $method = $handler[1];
           $controller = new $class();
           $controller->$method();
        }else {
            $error = new ErrorController();
            $error->notFound();
        }
    }
}