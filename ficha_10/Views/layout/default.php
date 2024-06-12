<!DOCTYPE html>
<html>
<head>
    <title><?= APP_NAME ?></title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div style="margin-left: 1rem;">
        <h1 class="navbar-brand" href=""><?= APP_NAME ?></h1>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav flex-grow-1">
            <li class="nav-item active">
                <a class="nav-link" href="index.php?c=home&a=conta">Conta</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?c=categoria&a=index">Categorias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?c=book&a=index">Books</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="btn btn-outline-danger ms-auto" href="index.php?c=auth&a=logout">
                    Logout
                </a>
            </li>
        </ul>
    </div>
</nav>

<?php require_once($viewPath); ?>
<script src="public/js/bootstrap.min.js"></script>
</body>
</html>