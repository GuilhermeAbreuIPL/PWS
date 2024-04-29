
<!--
    <h1>Plano de Pagamentos</h1>

    <form action="index.php?c=plano&a=show" method="post">
        <label for="credito">Credito:</label>
        <input type="text" id="credito" name="credito" required>
        <br>
        <label for="numPrest">Numero de Prestações:</label>
        <input type="text" id="numPrest" name="numPrest" required>
        <br>
        <input type="submit" value="Calcular">
    </form>

    -->

<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <form class="p-5 border rounded-3 bg-light" action="index.php?c=plano&a=show" method="post">
                <h1 class="text-center mb-4">Plano de Pagamentos</h1>
                <div class="mb-3">
                    <label for="credito" class="form-label">Credito:</label>
                    <input type="text" id="credito" name="credito" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="numPrest" class="form-label">Numero de Prestações:</label>
                    <input type="text" id="numPrest" name="numPrest" class="form-control" required>
                </div>
                <input type="submit" value="Calcular" class="btn btn-primary w-100">
            </form>
        </div>
    </div>
</div>
