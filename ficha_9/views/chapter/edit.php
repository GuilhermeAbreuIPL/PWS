<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2>Edit a Chapter</h2>
            <form action="index.php?c=chapter&a=update&id=<?= $chapter->id ?>" method="post">
                <div class="form-group">
                    <label for="id">ID do Capitulo: </label>
                    <h2> <?= $chapter->id ?> </h2>
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $chapter->name ?>" required>
                    <?php if(isset($chapter->errors)){ echo $chapter->errors->on('name'); }?>
                </div>
                <p></p>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

