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
    $modalidades = array(
        1022 => 'Atletismo',
        100 => 'Badminton',
        2658 => 'Basquetebol',
        5000 => 'Futebol',
        1026 => 'Natação'
    );
    ?>
    <h1>Modalidades</h1>
    <form action="ficha3.php" method="post">
        <select name="modalidades">
            <?php
            foreach ($modalidades as $key => $value) {
                echo '<option value="' . $key . '">' . $value . " (" .$key . ")" . '</option>';
            }
            ?>
        </select>
    </form>
    <br>
    <h1>Frutas</h1>
    <form method="post" action="">
        <label for="frutas[]">Escolha as suas frutas favoritas:</label><br>
        <input type="checkbox" name="frutas[]" value="morango">Morango<br>
        <input type="checkbox" name="frutas[]" value="laranja">Laranja<br>
        <input type="checkbox" name="frutas[]" value="banana">Banana<br>
        <input type="checkbox" name="frutas[]" value="framboesa">Framboesa<br>
        <button type="submit">Submeter</button>
    </form>
    <br>
    <?php
    if (isset($_POST['frutas'])) {
        $frutas = $_POST['frutas'];
        echo "As suas frutas favoritas são: ";
        foreach ($frutas as $frutasFavorita) {
            if($frutasFavorita == 0){
                echo $frutasFavorita;
            }
            else{
                echo $frutasFavorita . ", ";
            }
        }
    }
    ?>

</body>
</html>
