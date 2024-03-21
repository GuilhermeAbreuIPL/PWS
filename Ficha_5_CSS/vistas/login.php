<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="/Ficha_5_CSS/vistas/styles/css/base.css">
    <title>Login</title>
</head>
<body class="body">
<div class = "container">
    <div id="title">
        <h1 >Login</h1>
    </div>
    <div class="formulario">
        <form action="../controladores/authcontroller.php" method="post">
            <label for="user">User:</label>
            <input type="text" id="user" class="espaco" name="user" required>
            <br>
            <div class="pass-container">
                <label for="pass">Password:</label>
                <input type="password" id="pass" class="espaco" name="pass" required>
                <div class="eye-icon" onclick="myFunction()">
                    <i id="eye" class="fas fa-eye"></i>
                </div>
            </div>
            <br>
            <input class="login" type="submit" value="Login">
        </form>
    </div>
</div>
<script src="/Ficha_5_CSS/vistas/styles/js/mostrarPass.js"></script>
</body>
</html>