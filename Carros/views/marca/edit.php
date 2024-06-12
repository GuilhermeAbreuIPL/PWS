<div class="container">
    <form method="post" action="index.php?c=marca&a=update&id=<?= $marca->id ?>">
        <label for="nome">ID: <?= $marca->id ?></label>
        <br>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="<?= $marca->nome ?>">
        <?php if(isset($marca->errors)){ echo $marca->errors->on('nome'); }?>
        <p><?php
            if(isset($marca->errors)) {
                if (is_array($marca->errors->on('nome'))) {
                    foreach ($marca->errors->on('nome') as $error) {
                        echo $error . '<br>';
                    }
                } else {
                    echo $marca->errors->on('nome');
                }
            }
            ?>
        </p>


        <input class="btn btn-info" type="submit" value="Edit">
    </form>
</div>
