<div class="container">
    <form method="post" action="index.php?c=user&a=store">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="<?php if(isset($user)) { echo
        $user->nome; }?>">
        <?php if(isset($user->errors)){ echo $user->errors->on('nome'); }?>
        <br><?php
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

        <label for="nif">Nif:</label>
        <input type="text" name="nif" value="<?php if(isset($user)) { echo
        $user->nif; }?>">
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
        <input type="text" name="morada" value="<?php if(isset($user)) { echo
        $user->morada; }?>">
        <?php if(isset($user->errors)){ echo $user->errors->on('morada'); }?>
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
        <br>

        <input class="btn btn-info" type="submit">
    </form>
</div>