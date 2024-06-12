<div class="container">
    <h2 class="text-left top-space">Marca Index</h2>
    <h2 class="top-space"></h2>
    <div class="row">
        <div class="col-sm-12">
            <table class="table tablestriped"><thead><th><h3>Id</h3></th><th><h3>Name</h3></th>
                </th><th><h3>User Actions</h3></th></thead>
                <tbody>
                <?php foreach ($marcas as $marca) { ?>
                    <tr>
                        <td><?=$marca->id?></td>
                        <td><?=$marca->nome?></td>

                        <td>
                            <a href="index.php?c=marca&a=show&id=<?=$marca->id ?>"
                               class="btn btn-info" role="button">Show</a>
                            <a href="index.php?c=marca&a=edit&id=<?=$marca->id ?>"
                               class="btn btn-info" role="button">Edit</a>
                            <a href="index.php?c=marca&a=delete&id=<?=$marca->id ?>"
                               class="btn btn-warning" role="button">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="col-sm-6">
            <h3>Create a new Marca</h3>
            <p>
                <a href="index.php?c=marca&a=create" class="btn btn-info"
                   role="button">New</a>
            </p>
        </div>
    </div>
</div>
