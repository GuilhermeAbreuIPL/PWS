

    <table border="1">

        <?php
        //Apresentação dos dados
        echo "<h3> Data do emprestimo: " . $planoDePagamentos[0][0] . "</h3>";
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

    <a href="../../logoutcontroller.php">logout</a>
