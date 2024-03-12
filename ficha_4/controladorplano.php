<?php
//Declaração de variáveis
//$credito = 1000;
//$numPrest = 6;
$planoDePagamentos = array();
$despesaCredito = 50;

//Obtenção dos dados do formulário e validação, calculo do plano de pagamentos e apresentação dos dados na tabela
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




