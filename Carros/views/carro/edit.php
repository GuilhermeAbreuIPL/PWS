<div class="container">
    <form method="post" action="index.php?c=carro&a=update$id= <?= $carro->id ?>">
        <input type="hidden" name="user_id" value="<?= $carro->user_id ?>">

        <label for="marca">Marca:</label><br>
        <select name="marca_id">
            <?php foreach($marcas as $marca){?>
                <?php if($marca->id == $carros->marca_id) { ?>
                    <option value="<?= $marca->id?>" selected><?= $marca->nome;
                        ?> </option>
                <?php }else { ?>
                    <option value="<?= $marca->id?>"> <?= $marca->nome;
                        ?></option>
                <?php }
            } ?>
        </select>
        <?php
        if(isset($carro->errors)) {
            if (is_array($carro->errors->on('marca_id'))) {
                foreach ($carro->errors->on('marca_id') as $error) {
                    echo $error . '<br>';
                }
            } else {
                echo $carro->errors->on('marca_id');
            }
        }
        ?>
        <br>



        <label for="cilindrada">Cilindrada:</label>
        <input type="text" name="cilindrada" value="<?php if(isset($carro)) { echo
        $carro->cilindrada; }?>">
        <?php if(isset($carro->errors)){ echo $carro->errors->on('cilindrada'); }?>
        <?php
        if(isset($carro->errors)) {
            if (is_array($carro->errors->on('cilindrada'))) {
                foreach ($carro->errors->on('cilindrada') as $error) {
                    echo $error . '<br>';
                }
            } else {
                echo $carro->errors->on('cilindrada');
            }
        }
        ?>
        <br>

        <input class="btn btn-info" type='submit'>
    </form>

</div>
