<?php
//Declaração de variáveis
//$credito = 1000;
//$numPrest = 6;
$planoDePagamentos = array();
$despesaCredito = 50;

//abre o fomulario para introduzir os dados do credito e num de prestações
include_once 'formulario.php';

//Obtenção dos dados do formulário e validação, calculo do plano de pagamentos e apresentação dos dados na tabela
if (isset($_POST['credito']) && isset($_POST['numPrest'])) {
    $credito = $_POST['credito'];
    $numPrest = $_POST['numPrest'];

    //Inclusão do ficheiro modeloplano.php
    include_once 'modeloplano.php';

    // Chama a função calculaPlano() para obter o plano de pagamentos
    $planoDePagamentos = calculaPlano($credito, $numPrest);

    //Inclusão do ficheiro vistaplano.php
    include_once 'vistaplano.php';
}

?>




