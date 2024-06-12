<div class="container">
    <h1>Editar Despesa</h1>

    <form method="post" action="index.php?c=despesa&a=update&id=<?= $despesa->id ?>">
        <label for="categoria_id">Categoria:
            <select class="form-select" name="categoria_id">
                <?php foreach ($categorias as $categoria) { ?>
                    <option value=" <?=$categoria->id ?>"> <?= $categoria->nome ?> </option>
                <?php } ?>
                <?php
                if(isset($despesa->errors)) {
                    if (is_array($despesa->errors->on('categoria_id'))) {
                        foreach ($despesa->errors->on('categoria_id') as $error) {
                            echo $error . '<br>';
                        }
                    } else {
                        echo $despesa->errors->on('categoria_id');
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
                if(isset($despesa->errors)) {
                    if (is_array($despesa->errors->on('metodopagamento_id'))) {
                        foreach ($despesa->errors->on('metodopagamento_id') as $error) {
                            echo $error . '<br>';
                        }
                    } else {
                        echo $despesa->errors->on('metodopagamento_id');
                    }
                }
                ?>
            </select>
        </label>
        <p></p>
        <label for="valor">Valor da Despesa:
            <input type="text" for="valor" name="valor" id="valor" value="<?= $despesa->valor ?>">
        </label>
        <?php
        if(isset($despesa->errors)) {
            if (is_array($despesa->errors->on('valor'))) {
                foreach ($despesa->errors->on('valor') as $error) {
                    echo $error . '<br>';
                }
            } else {
                echo $despesa->errors->on('valor');
            }
        }
        ?>
        <p></p>
        <label for="descricao">Descrição:
            <input type="text" for="descricao" name="descricao" id="descricao" value="<?= $despesa->descricao ?>"></input>
        </label>
        <?php
        if(isset($despesa->errors)) {
            if (is_array($despesa->errors->on('descricao'))) {
                foreach ($despesa->errors->on('descricao') as $error) {
                    echo $error . '<br>';
                }
            } else {
                echo $despesa->errors->on('descricao');
            }
        }
        ?>
        <input type="hidden" value=" <?= $despesa->id ?>" name="conta_id">
        <p></p>
        <button type="submit">Criar</button>
    </form>
</div>
