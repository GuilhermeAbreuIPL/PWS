<div class="container">
    <form method="post" action="index.php?c=marca&a=store">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="<?php if(isset($marca)) { echo
        $marca->nome; }?>">
        <?php if(isset($user->errors)){ echo $marca->errors->on('nome'); }?>
        <br><?php
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

        <input class="btn btn-info" type="submit">
    </form>
</div>
