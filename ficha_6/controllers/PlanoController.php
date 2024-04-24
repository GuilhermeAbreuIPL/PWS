<?php
require_once './models/Plano.php';
require_once './models/Auth.php';

class PlanoController
{
    public function __construct()
    {
        $auth = new Auth();
        if (! $auth -> IsLoggedIn())
        {
            header('Location: index.php?c=auth&a=index');
        }
    }

    public function index()
    {
        require_once './views/plano/index.php';
    }

    public function show()
    {
        $credito = $_POST['credito'];
        $numPrest = $_POST['numPrest'];

        $despesa = 10;

        $plano = new Plano();

        $planoPagamento = $plano->calculaPlano($credito, $numPrest);

        require_once './views/show.php';
    }

    
}