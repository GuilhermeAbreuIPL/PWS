<?php

class Auth
{
    public function __construct()
    {
        session_start();
    }

    function CheckAuth($username, $password)
    {
        if ($username == 'admin' && $password == 'admin')
        {
            $_SESSION['username'] = 'admin';
            return true;
        }
        else
        {
            return false;
        }
    }

    function isLoggedIn()
    {
        // Verifica se o usuário está definido na sessão
        if (isset($_SESSION['username'])) {
            return true;
        } else {
            return false;
        }
    }

    function logout()
    {
        session_destroy();
    }
}