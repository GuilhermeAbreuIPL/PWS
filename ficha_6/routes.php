<?php

    require_once 'controllers/AuthController.php';
    require_once 'controllers/PlanoController.php';

    return [
        'defaultRoute' => ['GET', 'AuthController', 'index'],
        'auth' => [
            'index' => ['GET', 'AuthController', 'index'],
            'login' => ['POST', 'AuthController', 'login']
        ],

        'plano' => [
            'index' => ['GET', 'PlanoController', 'index'],
            'show' => ['POST', 'PlanoController', 'show']
        ],
    ];