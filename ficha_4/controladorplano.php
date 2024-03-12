<?php
    //Declaração de variáveis
    $planoDePagamentos = array();
    $despesaCredito = 50;

    //Verifica se os dados do fomulario já foram prenchidos e se sim ele apresenta os dados na tabela se não pede os dados
    if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
        $credito = $_POST['credito'];
        $numPrest = $_POST['numPrest'];

        //Inclusão do ficheiro modeloplano.php
        include_once 'modeloplano.php';

        // Chama a função calculaPlano() para obter o plano de pagamentos
        $planoDePagamentos = calculaPlano($credito, $numPrest);

        //Inclusão do ficheiro vistaplano.php
        include_once 'vistaplano.php';
    }
    else{
        include_once 'formulario.php';
    }
?>




