<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2>Book Details</h2>
            <table class="table table-striped">
                <tr>
                    <th>Id</th>
                    <td><?= $book->id ?></td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td><?= $book->name ?></td>
                </tr>
                <tr>
                    <th>ISBN</th>
                    <td><?= $book->isbn ?></td>
                </tr>
            </table>
            <a href="index.php?c=book&a=edit&id=<?= $book->id ?>"
               class="btn btn-info" role="button">Edit</a>
            <a href="index.php?c=book&a=delete&id=<?= $book->id ?>"
               class="btn btn-warning" role="button">Delete</a>
        </div>
    </div>
</div>
