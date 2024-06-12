<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2>Edit a Genre</h2>
            <form action="index.php?c=genre&a=update&id=<?= $genre->id ?>" method="post">
                <div class="form-group">
                    <label for="id">ID do Genre: </label>
                    <h2> <?= $genre->id ?> </h2>
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $genre->name ?>" required>
                    <?php if(isset($genre->errors)){ echo $genre->errors->on('name'); }?>
                </div>
                <p></p>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
