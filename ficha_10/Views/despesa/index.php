

<div class="container">
    <h1 ><?= 'Numero Da Conta: ', $conta->numconta ?></h1>
    <h3><?= 'Titular: ', $conta->titular ?></h3>
    <h3><?= 'NIB: ', $conta->nib ?></h3>
    <h3><?= 'Email: ', $conta->email ?></h3>

    <table class="table tablestriped"><thead><th><h3>Descrição</h3></th><th><h3>Id</h3></th><th><h3>Use
                Actions</h3></th></thead>
        <tbody>

        <?php foreach ($conta->despesas as $despesa) { ?>
            <tr>
                <td><?=$despesa->descricao?></td>
                <td><?=$despesa->id?></td>
                <td>
                    <a href="index.php?c=despesa&a=show&id=<?=$despesa->id
                    ?>" class="btn btn-info" role="button">Show</a>
                    <a href="index.php?c=despesa&a=edit&id=<?=$despesa->id
                    ?>" class="btn btn-info" role="button">Edit</a>
                    <a href="index.php?c=despesa&a=delete&id=<?=$despesa->id
                    ?>" class="btn btn-warning" role="button">Delete</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <h3>Create a new Despesa</h3>
    <p>
        <a href="index.php?c=despesa&a=create&id=<?=$conta->id ?>"
           class="btn btn-info" role="button">New</a>
    </p>
</div>