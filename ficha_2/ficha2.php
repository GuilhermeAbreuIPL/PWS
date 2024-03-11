<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ficha 2</title>
</head>
<body>
    <?php
    $protocolo = 'https://';
    $dominio = 'www.ipleiria.pt';
    $caminho = '/estudar/cursos/tesp/';

    echo '<a href="'.$protocolo . $dominio . $caminho.'"> IPLEIRIA</a> <br>';

    $num1 = 10;
    $num2 = 5;

    $soma = $num1 + $num2;
    $multiplicacao = $num1 * $num2;
    $subtracao = $num1 - $num2;
    $divisao = $num1 / $num2;

    echo '$num1(' . $num1 . ') + $num2(' . $num2 . ') = ' . $soma . '<br>';
    echo '$num1(' . $num1 . ') * $num2(' . $num2 . ') = ' . $multiplicacao . '<br>';
    echo '$num1(' . $num1 . ') - $num2(' . $num2 . ') = ' . $subtracao . '<br>';
    echo '$num1(' . $num1 . ') / $num2(' . $num2 . ') = ' . $divisao . '<br>';



    ?>


</body>
</html>

