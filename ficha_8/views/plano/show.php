
<!--
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
    <a href="index.php?c=plano&a=index">Clear Table</a>

    <a href="index.php?c=auth&a=logout">logout</a>
-->

<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <div class="p-5 border rounded-3 bg-light">
                <h3 class="text-center mb-4">Data do emprestimo: <?php echo $planoDePagamentos[0][0]; ?></h3>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Data</th>
                        <th>Valor da Prestação</th>
                        <th>Valor em Dívida</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    //Apresentação dos dados na tabela
                    for ($i = 0; $i < $numPrest; $i++) {
                        echo "<tr>";
                        echo "<td>" . $planoDePagamentos[$i][0] . "</td>";
                        echo "<td>" . $planoDePagamentos[$i][1] . "</td>";
                        echo "<td>" . $planoDePagamentos[$i][2] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>
                <div class="d-flex justify-content-between">
                    <a href="index.php?c=plano&a=index" class="btn btn-primary">Clear Table</a>
                    <a href="index.php?c=auth&a=logout" class="btn btn-secondary">Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>