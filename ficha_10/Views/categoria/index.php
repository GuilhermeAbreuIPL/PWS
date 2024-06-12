
<div class="container">
    <h1>Categorias</h1>
    <table class="table table-striped">
        <thead>
            <th><h3>Id</h3></th>
            <th><h3>Nome</h3></th>
            <th><h3>Actions</h3></th>
        </thead>
        <tbody>
            <tr>
                <?php
                    foreach ($categorias as $categoria){ ?>
                    <td> <?= $categoria->id ?></td>
                    <td> <?= $categoria->nome ?> </td>
                    <td>
                        <a class="btn btn-info" href="index.php?c=categoria&a=show&id=<?= $categoria->id ?>">SHOW</a>
                        <a class="btn btn-info" href="index.php?c=categoria&a=edit&id=<?= $categoria->id ?>">EDIT</a>
                        <a class="btn btn-danger" href="index.php?c=categoria&a=delete&id=<?= $categoria->id ?>">Delete</a>
                     </td>
                 <?php } ?>
            </tr>
        </tbody>
    </table>
    <label>Criar nova Categoria</label>
    <a class="btn btn-info" href="index.php?c=categoria&a=create">Create</a>
</div>