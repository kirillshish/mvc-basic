<?php

namespace application\core;

class Router//Класс маршрутизации/роутинга.
{

    public $routes = [];
    public $params = [];

    public function __construct()
    {
        $routes = require "application/lib/routes.php";
        foreach($routes as $route=>$params){
            $this->add($route,$params);
        }
    }

    public function add($route,$params)//Превращение строки в регулярное выражения для функции preg_match.
    {
        $route = preg_replace('/{([a-z]+):([^\}]+)}/', '(?P<\1>\2)', $route);
        $route = '#^'.$route.'$#';
        $this->routes[$route] = $params;
    }

    public function match() {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                foreach ($matches as $key => $match) {
                    if (is_string($key)) {
                        if (is_numeric($match)) {
                            $match = (int) $match;
                        }
                        $params[$key] = $match;
                    }
                }
                $this->params = $params;
                return true;
            }
        }
        return false;
    }

    public function run()//Запускам маршрутизатор.
    {
        if( $this->match() ) {
            $controller_path = 'application\controllers\\'.ucfirst($this->params['controller']).'Controller';
            if( class_exists($controller_path) ){
                $action_path = $this->params['action'].'Action';
                if( method_exists($controller_path, $action_path) ){
                    $controller = new $controller_path($this->params);//Создание контроллера.
                    $controller->$action_path();//Вызов метода контроллера.
                }else{
                    View::errorPage(404);
                }
            }else{
                View::errorPage(404);
            }
        }else{
            View::errorPage(404);
        }
    }

}