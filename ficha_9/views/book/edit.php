<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2>Edit a Book</h2>
            <form action="index.php?c=book&a=update&id=<?= $book->id ?>" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $book->name ?>" required>
                    <?php if(isset($book->errors)){ echo $book->errors->on('name'); }?>
                </div>
                <div class="form-group">
                    <label for="isbn">ISBN</label>
                    <input type="text" class="form-control" id="isbn" name="isbn" value="<?= $book->isbn ?>" required>
                    <?php if(isset($book->errors)){ echo $book->errors->on('isbn'); }?>
                </div>
                <div class="form-group mt-2">
                    <div class="btn-group">
                        <label for="genre_id">Genre
                            <select name="genre_id">
                                <?php foreach($genres as $genre){?>
                                    <?php if($genre->id == $book->genre_id) { ?>
                                        <option value="<?= $genre->id?>" selected><?= $genre->name;
                                            ?> </option>
                                    <?php }else { ?>
                                        <option value="<?= $genre->id?>"> <?= $genre->name;
                                            ?></option>
                                    <?php }
                                } ?>
                            </select>
                        </label>
                    </div>
                </div>
                <p></p>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>