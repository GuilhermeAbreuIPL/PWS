<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2>Genre Details</h2>
            <table class="table table-striped">
                <tr>
                    <th>Id</th>
                    <td><?= $genre->id ?></td>
                </tr>
                <tr>
                    <th>Genero</th>
                    <td><?= $genre->name ?></td>
                </tr>
            </table>
            <a href="index.php?c=genre&a=edit&id=<?= $genre->id ?>"
               class="btn btn-info" role="button">Edit</a>
            <a href="index.php?c=genre&a=delete&id=<?= $genre->id ?>"
               class="btn btn-warning" role="button">Delete</a>
        </div>
    </div>
</div>
