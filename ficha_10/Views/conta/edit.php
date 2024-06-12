<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2>Edita a conta id: <?= $contas->id ?></h2>
            <form action="index.php?c=contas&a=update&id=<?= $contas->id ?>" method="post">
                <div class="form-group">
                    <label for="numconta">Numero de Conta</label>
                    <input type="text" class="form-control" id="numconta" name="numconta" value="<?= $contas->numconta ?>" required>
                </div>
                <div class="form-group">
                    <label for="titular">Titular</label>
                    <input type="text" class="form-control" id="titular" name="titular" value="<?= $contas->titular ?>" required>
                </div>
                <div class="form-group">
                    <label for="nib">NIB</label>
                    <input type="text" class="form-control" id="nib" name="nib" value="<?= $contas->nib ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?= $contas->email ?>" required>
                </div>
                <p></p>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>