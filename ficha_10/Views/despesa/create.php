<div class="container">
    <h1>Despesa</h1>
    <h3>Conta: <?= $conta->numconta ?> </h3>
    <h3>Titular: <?= $conta->titular ?> </h3>
    <form method="post" action="index.php?c=despesa&a=store">
        <label for="categoria_id">Categoria:
            <select class="form-select" name="categoria_id">
                <?php foreach ($categorias as $categoria) { ?>
                            <option value=" <?=$categoria->id ?>"> <?= $categoria->nome ?> </option>
                <?php } ?>
                <?php
                if(isset($categoria->errors)) {
                    if (is_array($conta->errors->on('nome'))) {
                        foreach ($conta->errors->on('nome') as $error) {
                            echo $error . '<br>';
                        }
                    } else {
                        echo $conta->errors->on('nome');
                    }
                }
                ?>
            </select>
        </label>
        <p></p>
        <label for="metodopagamento_id">Metodo Pagamentos:
            <select class="form-select" name="metodopagamento_id">
                <?php foreach ($metodopagamentos as $metodopagamento) { ?>
                <option value=" <?= $metodopagamento->id ?> "> <?= $metodopagamento->nome ?> </option>
                <?php } ?>
                <?php
                if(isset($metodopagamento->errors)) {
                    if (is_array($conta->errors->on('nome'))) {
                        foreach ($conta->errors->on('nome') as $error) {
                            echo $error . '<br>';
                        }
                    } else {
                        echo $conta->errors->on('nome');
                    }
                }
                ?>
            </select>
        </label>
        <p></p>
        <label for="valor">Valor da Despesa:
            <input type="text" for="valor" name="valor" id="valor" value="<?php if(isset($despesa)) { echo
            $despesa->valor; }?>">
        </label>
        <p></p>
        <label for="descricao">Descrição:
            <textarea type="text" for="descricao" name="descricao" id="descricao" value="<?php if(isset($despesa)) { echo
            $despesa->descricao; }?>"></textarea>
        </label>
        <input type="hidden" value=" <?= $conta->id ?>" name="conta_id">
        <p></p>
       <button type="submit">Criar</button>
    </form>
</div>