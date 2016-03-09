<?php
// Подключаем автолоадер
require __DIR__.'/core/vendor/autoload.php';

use PHPRouter\RouteCollection;
use PHPRouter\Router;
use PHPRouter\Route;


// Показываем все ошибки
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Маршрутизатор
$collection = new RouteCollection();

$collection->attachRoute(new Route('/test/', array(
    '_controller' => 'TGPU\Controller\Start::index',
    'methods' => 'GET'
)));

$router = new Router($collection);
$route = $router->matchCurrentRequest();

