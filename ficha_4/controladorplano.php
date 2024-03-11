<?php
    //Declaração de variáveis
    $credito = 1000;
    $numPrest = 6;
    $planoDePagamentos = array();
    $despesaCredito = 50;

    //Inclusão do ficheiro modeloplano.php
    include_once 'modeloplano.php';

    // Chama a função calculaPlano() para obter o plano de pagamentos
    $planoDePagamentos = calculaPlano($credito, $numPrest);

    //Inclusão do ficheiro vistaplano.php
    include_once 'vistaplano.php';
?>




