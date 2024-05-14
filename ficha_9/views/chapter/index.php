

<div class="container">
    <h1 ><?= 'Nome do Livro: ', $book->name ?></h1>
    <h3><?= 'ISBN: ', $book->isbn ?></h3>
    <h3><?= 'Genero: ', $book->genre->name ?></h3>

    <table class="table tablestriped"><thead><th><h3>Id</h3></th><th><h3>Name</h3></th><th><h3>Use
                Actions</h3></th></thead>
        <tbody>
        <?php foreach ($book->chapters as $chapter) { ?>
            <tr>
                <td><?=$chapter->id?></td>
                <td><?=$chapter->name?></td>
                <td>
                    <a href="index.php?c=chapter&a=show&id=<?=$chapter->id
                    ?>" class="btn btn-info" role="button">Show</a>
                    <a href="index.php?c=chapter&a=edit&id=<?=$chapter->id
                    ?>" class="btn btn-info" role="button">Edit</a>
                    <a href="index.php?c=chapter&a=delete&id=<?=$chapter->id
                    ?>" class="btn btn-warning" role="button">Delete</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <h3>Create a new Chapter</h3>
    <p>
        <a href="index.php?c=chapter&a=create&id=<?=$book->id ?>"
           class="btn btn-info" role="button">New</a>
    </p>
</div>

