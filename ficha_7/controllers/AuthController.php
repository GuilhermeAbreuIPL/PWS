<?php
require_once './models/Auth.php';
require_once 'Controller.php';

class AuthController extends Controller
{
    public function index()
    {
        $this->renderView('auth', 'index', [], 'layout');
    }

    public function login()
    {
        $nome = $this->getHTTPPostParam('username');
        $pass = $this->getHTTPPostParam('password');

        $auth = new Auth();

        if ($auth->CheckAuth($nome, $pass))
        {
            $this->redirectToRoute('plano', 'index');
        }
        else
        {
            $this->renderView('auth', 'index', [], 'layout');
        }
    }

    public function logout()
    {
        $auth = new Auth();
        $auth->Logout();
        $this->renderView('auth', 'index', [], 'layout');
    }

}