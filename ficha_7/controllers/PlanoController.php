<?php
require_once './models/Plano.php';
require_once './models/Auth.php';

class PlanoController extends Controller
{
    public function __construct()
    {
        $auth = new Auth();
        if (! $auth -> IsLoggedIn())
        {
            $this->renderView('auth', 'index');
        }
    }

    public function index()
    {
        $this->renderView('plano', 'index');
    }

    public function show()
    {
        $credito = $this->getHTTPPostParam('credito');
        $numPrest = $this->getHTTPPostParam('numPrest');

        $despesa = 10;

        $plano = new Plano();

        $planoPagamento = $plano->calculaPlano($credito, $numPrest);

        $this->renderView('plano', 'show', ['planoDePagamentos' => $planoPagamento, 'numPrest' => $numPrest]);
    }

    
}