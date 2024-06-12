<?php

    require_once 'Controllers\ContaController.php';
    require_once 'Controllers\DespesaController.php';
    require_once 'Controllers\CategoriaController.php';

    return [

        'defaultRoute' => ['GET', 'ContaController', 'index'],

        'conta'=>[
            'index' => ['GET', 'ContaController', 'index'],
            'show' => ['GET', 'ContaController', 'show'],
            'edit' => ['GET', 'ContaController', 'edit'],
            'update' => ['POST', 'ContaController', 'update'],
            'delete' => ['GET', 'ContaController', 'delete'],
            'create' => ['GET','ContaController', 'create'],
            'store' => ['POST', 'ContaController', 'store'],
        ],

        'despesa'=>[
            'index' => ['GET', 'DespesaController', 'index'],
            'show' => ['GET', 'DespesaController', 'show'],
            'edit' => ['GET', 'DespesaController', 'edit'],
            'update' => ['POST', 'DespesaController', 'update'],
            'delete' => ['GET', 'DespesaController', 'delete'],
            'create' => ['GET','DespesaController', 'create'],
            'store' => ['POST', 'DespesaController', 'store'],
        ],

        'categoria'=>[
            'index' => ['GET', 'CategoriaController', 'index'],
            'show' => ['GET', 'CategoriaController', 'show']
        ]
    ];
