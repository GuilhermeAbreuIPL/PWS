<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-striped">
                <thead>
                <th><h3>Id</h3></th>
                <th><h3>Genero</h3></th>
                <th><h3>User Actions</h3></th>
                </thead>
                <tbody>
                <?php foreach ($genres as $genre) { ?>
                    <tr>
                        <td><?= $genre->id ?></td>
                        <td><?= $genre->name ?></td>
                        <td>
                            <a href="index.php?c=genre&a=show&id=<?= $genre->id ?>"
                               class="btn btn-info" role="button">Show</a>
                            <a href="index.php?c=genre&a=edit&id=<?=$genre->id
                            ?>" class="btn btn-info" role="button">Edit</a>
                            <a href="index.php?c=genre&a=delete&id=<?= $genre->id ?>"
                               class="btn btn-warning" role="button">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            <p><?php if (isset($error)) { echo $error; }?></p>
        </div>
        <div class="col-sm-6">
            <h3>Create a Genre</h3>
            <p>
                <a href="index.php?c=genre&a=create" class="btn btn-info"
                   role="button">Go</a>
            </p>
            <h3>Book</h3>
            <p>
                <a href="index.php?c=book&a=index" class="btn btn-info"
                   role="button">Show</a>
            </p>
        </div>
    </div>
</div>
