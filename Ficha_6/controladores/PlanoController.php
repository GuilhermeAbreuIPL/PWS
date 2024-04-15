<?php

class PlanoController
{

    public  function index()
    {
        include_once '../vistas/formulario.php';
    }
    public function show()
    {
        $credito = $_POST['credito'];
        $numPrest = $_POST['numPrest'];

        //Inclusão do ficheiro modeloplano.php
        include_once '../modelos/modeloplano.php';

        // Chama a função calculaPlano() para obter o plano de pagamentos
        $planoDePagamentos = calculaPlano($credito, $numPrest);

        //Inclusão do ficheiro vistaplano.php
        include_once '../vistas/vistaplano.php';
    }
}