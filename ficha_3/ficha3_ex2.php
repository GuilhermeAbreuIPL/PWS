<?php
    //Declaração de variáveis
    $credito = 1000;
    $numPrest = 6;
    $planoDePagamentos = array();

    //Inclusão da biblioteca Carbon
    require 'vendor/autoload.php';
    use Carbon\Carbon;
    $data = Carbon::now();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
//Cálculo do valor da prestação
$valorPrest = $credito / $numPrest;
$valorDivida = $credito;

//Criação do plano de pagamentos
for ($i = 1; $i <= $numPrest; $i++) {
    //Cálculo da data
    if($i == 1){
        $planoDePagamentos[$i][0] = Carbon::now();
    }
    else{
        $planoDePagamentos[$i][0] = $data->addMonth() ->copy();
    }

    //Cálculo do valor da prestação e da dívida
    $planoDePagamentos[$i][1] = $valorPrest;
    $planoDePagamentos[$i][2] = $credito - ($valorPrest * $i);
}
    //despesa do crédito
    $despesaCredito = 50;
    $planoDePagamentos[1][1] += $despesaCredito;

?>
<table border="1">
        <h1>Plano de Pagamentos</h1>
        <?php
        //Apresentação dos dados
        echo "<h3> Valor a contrair: " . $credito . "</h3>";
        echo "<h3> Número de prestações: " . $numPrest ."</h3>";
        echo "<h3> Data do emprestimo: " . Carbon::now() . "</h3>";
        echo "<h3> O valor da despesa do crédito é de " . $despesaCredito . "€ e encontra-se incluída na primeira prestação</h3>";
        ?>
        <tr>
            <th>Data</th>
            <th>Valor da Prestação</th>
            <th>Valor em Dívida</th>
        </tr>
        <?php
        //Apresentação dos dados na tabela
        for ($i = 1; $i <= $numPrest; $i++) {
            echo "<tr>";
            echo "<td>" . $planoDePagamentos[$i][0]->format('d-m-Y') . "</td>";
            echo "<td style='text-align: center' >" . number_format($planoDePagamentos[$i][1], 2) . "</td>";
            echo "<td style='text-align: center' >" . number_format($planoDePagamentos[$i][2], 2) . "</td>";
            echo "</tr>";
        }
        ?>
</table>


</body>
</html>
