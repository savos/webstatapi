<?php

namespace Config;

$routes = [
    ['route' => 'stats/apis/ga', 'httpMethod' => 'GET', 'controller' => 'GaController', 'method' => 'getGaStats'],
    ['route' => 'stats/apis/*',  'httpMethod' => 'GET', 'controller' => 'ApiController','method' => 'getApiStatsMonth'],

    ['route' => 'stats/dbs/*',   'httpMethod' => 'GET', 'controller' => 'DbController', 'method' => 'getDbStatsMonth'],
    ['route' => 'stats/dbs/*',   'httpMethod' => 'DELETE', 'controller' => 'DbController', 'method' => 'getDbStats'],
    ['route' => 'stats/dbs/*',   'httpMethod' => 'POST','controller' => 'DbController', 'method' => 'addDbStats'],

    ['route' => 'stats/*', 'httpMethod' => 'GET', 'controller' => 'AppController', 'method' => 'getAllStatsMonth'],
    ['route' => '/', 'httpMethod' => 'GET', 'controller' => 'AppController', 'method' => 'home'],
];
