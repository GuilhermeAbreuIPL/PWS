<div class="container">
    <form method="post" action="index.php?c=user&a=update&id=<?= $user->id ?>">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="<?= $user->nome ?>">
        <?php if(isset($user->errors)){ echo $user->errors->on('nome'); }?>
        <p><?php
            if(isset($user->errors)) {
                if (is_array($user->errors->on('nome'))) {
                    foreach ($user->errors->on('nome') as $error) {
                        echo $error . '<br>';
                    }
                } else {
                    echo $user->errors->on('nome');
                }
            }
            ?>
        </p>
        <br>

        <label for="nif">Nif:</label>
        <input type="text" name="nif" value="<?= $user->nif ?>">
        <?php if(isset($user->errors)){ echo $user->errors->on('nif'); }?>
        <?php
        if(isset($user->errors)) {
            if (is_array($user->errors->on('nif'))) {
                foreach ($user->errors->on('nif') as $error) {
                    echo $error . '<br>';
                }
            } else {
                echo $user->errors->on('nif');
            }
        }
        ?>
        <br>

        <label for="morada">Morada:</label>
        <input type="text" name="morada" value="<?= $user->morada ?>">
        <?php if(isset($user->errors)){ echo $user->errors->on('morada'); }?>
        <br>
        <?php
        if(isset($user->errors)) {
            if (is_array($user->errors->on('morada'))) {
                foreach ($user->errors->on('morada') as $error) {
                    echo $error . '<br>';
                }
            } else {
                echo $user->errors->on('morada');
            }
        }
        ?>

        <input class="btn btn-info" type="submit" value="Edit">
    </form>
</div>
