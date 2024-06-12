<?php

    require_once './controllers/UserController.php';
    require_once './controllers/CarroController.php';
require_once './controllers/MarcaController.php';

    return [
        'defaultRoute' => ['GET', 'UserController', 'index'],
        'user' => [
            'index' => ['GET', 'UserController', 'index'],
            'create' => ['GET', 'UserController', 'create'],
            'show' => ['GET', 'UserController', 'show'],
            'store' => ['POST', 'UserController', 'store'],
            'edit' => ['GET', 'UserController', 'edit'],
            'update' => ['POST', 'UserController', 'update'],
            'delete' => ['GET', 'UserController', 'delete']

        ],

        'carro' => [
            'index' => ['GET', 'CarroController', 'index'],
            'create' => ['GET', 'CarroController', 'create'],
            'show' => ['GET', 'CarroController', 'show'],
            'store' => ['POST', 'CarroController', 'store'],
            'edit' => ['GET', 'CarroController', 'edit'],
            'update' => ['POST', 'CarroController', 'update'],
            'delete' => ['GET', 'CarroController', 'delete']

        ],

        'marca' => [
            'index' => ['GET', 'MarcaController', 'index'],
            'create' => ['GET', 'MarcaController', 'create'],
            'show' => ['GET', 'MarcaController', 'show'],
            'store' => ['POST', 'MarcaController', 'store'],
            'edit' => ['GET', 'MarcaController', 'edit'],
            'update' => ['POST', 'MarcaController', 'update'],
            'delete' => ['GET', 'marcaController', 'delete']

        ],

    ];
