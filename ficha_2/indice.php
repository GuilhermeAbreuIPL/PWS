<?php
$capitulo1 = 'Capitulo 1';
$capitulo2 = 'Capitulo 2';
$capitulo3 = 'Capitulo 3';
$titulo = 'Índice';
$versao = '1.0';
?>
<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Indice</title>
</head>
<body>
    <?php
        echo '<h1>"' . $titulo . '"</h1>';
        echo '<h3> "' . $versao . '"</h3>';
    ?>
    <ul>
        <li>
            <a href="capitulo1.php"><?php echo $capitulo1 ?><br></a>
        </li>
        <li>
            <a href="capitulo2.php"><?php echo $capitulo2 ?> <br></a>
        </li>
        <li>
            <a href="capitulo3.php"><?php echo $capitulo3 ?><br></a>
        </li>
    </ul>
</body>
</html>
