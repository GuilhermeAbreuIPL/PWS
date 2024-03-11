<?php
// inicialização do autoloader do composer para carregar o carbon
require 'vendor/autoload.php';
use Carbon\Carbon;

function calculaPlano($credito, $numPrest)
{
    $planoDePagamentos = array();
    $data = Carbon::now();

    //Cálculo do valor da prestação
    $valorPrest = $credito / $numPrest;

    //Criação do plano de pagamentos
    for ($i = 0; $i <= $numPrest; $i++) {

        //Cálculo da data
        $planoDePagamentos[$i][0] = $data->addMonth($i)->format('d-m-Y');


        //Cálculo do valor da prestação e da dívida com apenas 2 casas decimais
        $planoDePagamentos[$i][1] = number_format($valorPrest, 2);
        $planoDePagamentos[$i][2] = number_format($credito - ($valorPrest * ($i + 1)), 2);

    }

    //Cálculo da despesa do crédito
    $despesaCredito = 50;
    $planoDePagamentos[0][1] += $despesaCredito;

    return $planoDePagamentos;
}

?>