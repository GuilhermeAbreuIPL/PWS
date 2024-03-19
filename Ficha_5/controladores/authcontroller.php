<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    require_once('../vistas/login.php');
}
else {
    include_once '../modelos/auth.php';
    $username = $_POST['user'];
    $password = $_POST['pass'];
    if (checkAuth($username, $password)) {
        header('Location: controladorplano.php');
    }
    else {
        require_once('../vistas/login.php');
    }
}
?>
