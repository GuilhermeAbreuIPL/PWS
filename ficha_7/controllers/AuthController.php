<?php
require_once './models/Auth.php';

class AuthController
{
    public function index()
    {
        require_once './views/auth/index.php';
    }

    public function login()
    {
        $nome = $_POST['username'];
        $pass = $_POST['password'];

        $auth = new Auth();

        if ($auth->CheckAuth($nome, $pass))
        {
            header('Location: index.php?c=plano&a=index');
        }
        else
        {
           require_once './views/auth/index.php';
        }
    }

    public function logout()
    {
        $auth = new Auth();
        $auth->Logout();
        header('Location: index.php?c=auth&a=index');
    }

}