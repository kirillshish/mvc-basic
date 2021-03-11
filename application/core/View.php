<?php

namespace application\core;

class View//Класс где формируется шаблон и вставляется конкретное ПРЕДСТАВЛЕНИЕ в этот шаблон
{

    public $params;
    public $template = 'default'; //Название базового шаблона по умолчанию
    public $path; //Путь к нужному нам представлению взависимости от названия контроллера
    public $acl;

    public function __construct($params,$acl)
    {
        $this->acl = $acl;
        $this->params = $params;
        $this->path = $params['controller'].'/'.$params['action'];
    }

    public static function errorPage($page)
    {
        require 'application/views/errors/'.$page.'.php';
    }

    public function render($title,$vars = [])//Тут генерируется сама html-страница.
    {
        if($this->acl == true){
            extract($vars);
            ob_start();
            require 'application/views/'.$this->path.'.php';
            $content = ob_get_clean();
            require 'application/views/layouts/'.$this->template.'.php';
        }else{
            View::errorPage(404);
        }
    }

}