<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="../controladores/authcontroller.php" method="post">
        <label for="user">User:</label>
        <input type="text" id="user" name="user" required>
        <br>
        <label for="pass">Password:</label>
        <input type="password" id="pass" name="pass" required>
        <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>

