<div class="container">
    <h1>Despesa id: <?= $despesa->id ?></h1>
    <h3>Conta id: <?= $despesa->conta_id ?></h3>
    <h3>Categoria: <?= $despesa->categoria->nome ?></h3>
    <h3>Metodo Pagamento: <?= $despesa->metodopagamento->nome ?></h3>
    <h3>Data: <?= $despesa->data ?></h3>
    <h3>Valor: <?= $despesa->valor ?></h3>
    <h3>Descricao: <?= $despesa->descricao ?> </h3>
    <p>-------------------------</p>
    <h3>Opções</h3>
    <a class="btn btn-info" role="button" href="index.php?c=despesa&a=edit&id=<?= $despesa->id ?>">Editar</a>
    <a class="btn btn-danger" role="button" href="index.php?c=despesa&a=delete&id=<?= $despesa->id ?>">Eliminar</a>
</div>
