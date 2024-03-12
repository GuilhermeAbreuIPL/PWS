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
<table border="1">

    <?php
    //Apresentação dos dados
    echo "<h3> Data do emprestimo: " . $planoDePagamentos[0][0] . "</h3>";
    echo "<h3> O valor da despesa do crédito é de " . $despesaCredito . "€ e encontra-se incluída na primeira prestação</h3>";
    ?>
    <tr>
        <th>Data</th>
        <th>Valor da Prestação</th>
        <th>Valor em Dívida</th>
    </tr>
    <?php
    //Apresentação dos dados na tabela
    for ($i = 0; $i < $numPrest; $i++) {
        echo "<tr>";
        echo "<td>" . $planoDePagamentos[$i][0] . "</td>";
        echo "<td style='text-align: center' >" . $planoDePagamentos[$i][1] . "</td>";
        echo "<td style='text-align: center' >" . $planoDePagamentos[$i][2] . "</td>";
        echo "</tr>";
    }
    ?>
</table>
<br>
<a href="controladorplano.php">Clear Table</a>
</body>
</html>