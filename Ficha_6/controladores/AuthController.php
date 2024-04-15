<?php
include_once '../modelos/auth.php';
class AuthController
{
    public function index()
    {
        require_once('../vistas/login.php');
    }

    public function login()
    {

        $username = $_POST['user'];
        $password = $_POST['pass'];
        if (checkAuth($username, $password)) {
            header('Location: controladorplano2.php');
        }
        else {
            require_once('../vistas/login.php');
        }

    }
}
