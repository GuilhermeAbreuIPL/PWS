<div class="container">
    <table class="table tablestriped"><thead><th><h3>Id</h3></th><th><h3>User</h3></th><th><h3>Marca</h3></th><th><h3>Cilindrada</h3></th><th><h3>Actions</h3></th></thead>
        <tbody>
        <?php foreach ($user->carros as $carro) { ?>
            <tr>
                <td><?=$carro->id?></td>
                <td><?=$carro->user->nome ?></td>
                <td><?=$carro->marca->nome ?></td>
                <td><?=$carro->cilindrada ?></td>
                <td>
                    <a href="index.php?c=carro&a=show&id=<?=$carro->id
                    ?>" class="btn btn-info" role="button">Show</a>
                    <a href="index.php?c=carro&a=edit&id=<?=$carro->id
                    ?>" class="btn btn-info" role="button">Edit</a>
                    <a href="index.php?c=carro&a=delete&id=<?=$carro->id
                    ?>" class="btn btn-warning" role="button">Delete</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <h3>Associar um novo carro ao <?=$user->nome ?></h3>
    <p>
        <a href="index.php?c=carro&a=create&id=<?=$user->id ?>"
           class="btn btn-info" role="button">New</a>
    </p>

</div>
