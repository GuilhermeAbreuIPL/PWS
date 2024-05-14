<?php

    require_once 'controllers/AuthController.php';
    require_once 'controllers/PlanoController.php';
    require_once 'controllers/HomeController.php';
    require_once 'controllers/BookController.php';
    require_once 'controllers/ChapterController.php';

    return [
        'defaultRoute' => ['GET', 'AuthController', 'index'],
        'auth' => [
            'index' => ['GET', 'AuthController', 'index'],
            'login' => ['POST', 'AuthController', 'login'],
            'logout' => ['GET', 'AuthController', 'logout']
        ],

        'plano' => [
            'index' => ['GET', 'PlanoController', 'index'],
            'show' => ['POST', 'PlanoController', 'show']
        ],

        'home' => [
            'index' => ['GET', 'HomeController', 'index']
        ],

        'book' => [
            'index' => ['GET', 'BookController', 'index'],
            'show' => ['GET', 'BookController', 'show'],
            'create' => ['GET', 'BookController', 'create'],
            'store' => ['POST', 'BookController', 'store'],
            'edit' => ['GET', 'BookController', 'edit'],
            'update' => ['POST', 'BookController', 'update'],
            'delete' => ['GET', 'BookController', 'delete'],
        ],

        'chapter' => [
            'index' => ['GET', 'ChapterController', 'index'],
            'show' => ['GET', 'ChapterController', 'show'],
            'create' => ['GET', 'ChapterController', 'create'],
            'store' => ['POST', 'ChapterController', 'store'],
            'delete' => ['GET', 'ChapterController', 'delete'],
            'edit' => ['GET', 'ChapterController', 'edit']
        ],


    ];
