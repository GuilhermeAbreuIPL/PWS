<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ficha5</title>
</head>
<body>

    <!-- Formulário Login-->
    <form action="index.php?c=auth&a=login" method="post">
        <h1>Pagina de Login</h1>
        <p>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
        </p>
        <p>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </p>
        <input type="submit" value="Login" style="width: 16%">
    </form>

</body>
</html>