<?php
//Файл index.php - точка входа.


require "application/lib/config.php";//Подключаем файл с автозагрузчиком.


$router = new application\core\Router;//Вызываем класс для маршрутизации.
$router->run();


