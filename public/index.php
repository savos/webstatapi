<?php

use App\Routing\Route;
use App\Controllers\AppController;
use App\Controllers\DbController;
use App\Controllers\GaController;

require __DIR__.'/../vendor/autoload.php';

require_once('../config/Config.php');
require_once('../config/Routes.php');

    $uri = $_SERVER['REQUEST_URI'];
    $route = $_SERVER['REDIRECT_URL'];
    $query = $_SERVER['QUERY_STRING'];
    $httpMethod = $_SERVER['REQUEST_METHOD'];

    try {
        $router = new Route($httpMethod, $route);
    } catch (\App\Routing\NonExistentRouteException $e) {
        echo($e->getMessage());
        die();
    }

    $controller = $router->getController();
    $method = $router->getMethod();
    $params = $router->getParams();

    switch ($controller) {
        case 'AppController': $app = new AppController(); break;
        case 'DbController': $app = new DbController(); break;
        case 'GaController': $app = new GaController(); break;
    }
//    $app = new $controller;
    echo($app->$method($params));






