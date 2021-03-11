<?php

namespace application\core;

abstract class Controller//Базовый контроллер. В нем создаются базовые классы МОДЕЛИ и ПРЕДСТАВЛЕНИЯ.
{

    public $params;
    public $view;
    public $model;
    public $acl;

    public function __construct($params)
    {
        $this->params = $params;
        $this->acl = $this->checkAcl();
        $this->view = new View($params,$this->acl);
        $this->model = $this->loadModel();
    }

    public function loadModel()
    {
        $model_path = 'application\models\\'.ucfirst($this->params['controller']);
        if( class_exists($model_path)){
            return new $model_path;
        }else{
            return false;
        }
    }

    public function checkAcl()
    {
        $acl = require 'application/acl/'.$this->params['controller'].'.php';
        if( $this->isAsl($acl,'all') ){
            return true;
        }elseif((isset($_SESSION['auth']['user_id'])) and ($this->isAsl($acl,'auth'))){
            return true;
        }elseif((!isset($_SESSION['auth']['user_id'])) and ($this->isAsl($acl,'guest'))){
            return true;
        }elseif((isset($_SESSION['admin']['user_id'])) and ($this->isAsl($acl,'admin'))){
            return true;
        }
        return false;
    }

    public function isAsl($acl,$key)
    {
        return in_array($this->params['action'],$acl[$key]);
    }

}