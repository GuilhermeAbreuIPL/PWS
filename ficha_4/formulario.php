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
    <h1>Plano de Pagamentos</h1>

    <form action="controladorplano.php" method="post">
        <label for="credito">Credito:</label>
        <input type="text" id="credito" name="credito" required>
        <br>
        <label for="numPrest">Numero de Prestações:</label>
        <input type="text" id="numPrest" name="numPrest" required>
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>