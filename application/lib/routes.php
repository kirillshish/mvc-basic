<?php
//Файл с активными путями для сайта(файл подключается и используется в application/core/Router.php).

return array(
    '' => [
        'controller' => 'main',
        'action' => 'index',
    ],
    'catalog/show' => [
        'controller' => 'catalog',
        'action' => 'show',
    ],
    //Добавил айдишник чтобы можно было открыть только ссылку на конкретную категорию.
    'catalog/category/{id:\d+}' => [
        'controller' => 'catalog',
        'action' => 'category'
    ],
    'catalog/product' => [
        'controller' => 'catalog',
        'action' => 'product',
    ],
    'account/login' => [
        'controller' => 'account',
        'action' => 'login',
    ],
    'account/register' => [
        'controller' => 'account',
        'action' => 'register',
    ],
    'account/profile' => [
        'controller' => 'account',
        'action' => 'profile',
    ],
    'account/basket' => [
        'controller' => 'account',
        'action' => 'basket',
    ],
);