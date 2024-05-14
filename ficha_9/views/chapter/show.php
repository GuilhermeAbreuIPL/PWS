<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2>Chapter Details</h2>
            <table class="table table-striped">
                    <tr class="text-center">
                        <td><h3>ID</h3></td>
                        <td><h3>Nome do Capitulo</h3></td>
                    </tr>
                    <tr class="text-center">
                        <td><?=$chapter->id?></td>
                        <td><?=$chapter->name?></td>
                    </tr>
            </table>
            <a href="index.php?c=chapter&a=edit&id=<?=$chapter->id
            ?>" class="btn btn-info" role="button">Edit</a>
            <a href="index.php?c=chapter&a=delete&id=<?=$chapter->id
            ?>" class="btn btn-warning" role="button">Delete</a>
        </div>
    </div>
</div>
