<div class="container">
    <h1>Conta Nº: <?= $contas->numconta ?> </h1>

    <h4>Id: <?= $contas->id ?></h4>
    <h4>Titular: <?= $contas->titular ?></h4>
    <h4>NIB: <?= $contas->nib ?></h4>
    <h4>Email: <?= $contas->email?></h4>

    <h2>Editar</h2>
    <a href="index.php?c=contas&a=edit&id=<?= $contas->id ?>"
       class="btn btn-info" role="button">Editar</a>
    <a href="index.php?c=contas&a=delete&id=<?= $contas->id ?>"
       class="btn btn-danger" role="button">Eliminar</a>
</div>