<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller
{

    public function loginAction()
    {
        $this->view->render('Вход');
    }

    public function registerAction()
    {
        $this->view->render('Регистрация');
    }

    public function profileAction()
    {
        $this->view->render('Профиль');
    }

    public function basketAction()
    {
        $this->view->render('Корзина');
    }

}