<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Ficha_5_CSS/vistas/styles/css/base.css">
    <link rel="stylesheet" href="/Ficha_5_CSS/vistas/styles/css/vistaplano.css">
    <title>Document</title>
</head>
<body class="body">
<nav class="navbar">
    <div class="logout">
        <a  href="../controladores/logoutController.php">Logout</a>
    </div>
</nav>
<div class = "container">
    <div id="title">
        <h1 >Tabela de Prestações</h1>
    </div>
    <div class="formulario">
        <table border="1">
            <?php
            //Apresentação dos dados
            echo "<p> Data do emprestimo: " . $planoDePagamentos[0][0] . "</p>";
            echo "<p> O valor da despesa do crédito é de " . $despesaCredito . "€ e encontra-se incluída na primeira prestação</p>";
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
        <a href="../controladores/controladorplano.php" class="clear-table">Clear Table</a><br>
    </div>
</div>
</body>
</html>