<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Ficha_5_CSS/vistas/styles/css/base.css">
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
            <h1 >Plano de Pagamentos</h1>
        </div>
        <div class="formulario">
            <form action="../controladores/controladorplano.php" method="post">
                <label for="credito">Credito:</label>
                <input type="text" id="user" class="espaco" name="credito" required>
                <br>
                <label for="numPrest">Numero de Prestações:</label>
                <input type="text" id="user" class="espaco" name="numPrest" required>
                <br>
                <input type="submit" value="Calcular">
            </form>
        </div>
    </div>
</body>
</html>