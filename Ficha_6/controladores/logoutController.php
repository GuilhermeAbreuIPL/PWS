<?php
//ele vai para o auth.php para fazer o logout
include_once '../modelos/auth.php';
Loggout();
// ele manda o login
require_once '../vistas/login.php'
?>
