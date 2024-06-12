<?php
require_once 'vendor/autoload.php';

define('APP_NAME', 'Seguros Auto');
define('INVALID_ACCESS_ROUTE', 'index.php?c=user&a=index');

ActiveRecord\Config::initialize(function($cfg)
{
    $cfg->set_model_directory('./models');
    $cfg->set_connections(
        array(
            'development' => 'mysql://root@localhost/seguros_auto',
        )
    );
});
