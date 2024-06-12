<div class="container">
    <h2 class="text-left top-space">User Index</h2>
    <h2 class="top-space"></h2>
    <div class="row">
        <div class="col-sm-12">
            <table class="table tablestriped"><thead><th><h3>Id</h3></th><th><h3>Name</h3></th><th><h3>Nif</h3>
                </th><th><h3>Morada</h3>
                </th><th><h3>User Actions</h3></th></thead>
                <tbody>
                <?php foreach ($users as $user) { ?>
                    <tr>
                        <td><?=$user->id?></td>
                        <td><?=$user->nome?></td>
                        <td><?=$user->nif?></td>
                        <td><?=$user->morada?></td>
                        <td>
                            <a href="index.php?c=user&a=show&id=<?=$user->id ?>"
                               class="btn btn-info" role="button">Show</a>
                            <a href="index.php?c=user&a=edit&id=<?=$user->id ?>"
                               class="btn btn-info" role="button">Edit</a>
                            <a href="index.php?c=user&a=delete&id=<?=$user->id ?>"
                               class="btn btn-warning" role="button">Delete</a>
                            <a href="index.php?c=carro&a=index&id=<?=$user->id ?>"
                               class="btn btn-info" role="button">Associar Carro</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="col-sm-6">
            <h3>Create a new User</h3>
            <p>
                <a href="index.php?c=user&a=create" class="btn btn-info"
                   role="button">New</a>
            </p>
        </div>
    </div>
</div>