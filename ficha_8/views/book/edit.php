<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2>Edit a Book</h2>
            <form action="index.php?c=book&a=update&id=<?= $book->id ?>" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $book->name ?>" required>
                </div>
                <div class="form-group">
                    <label for="isbn">ISBN</label>
                    <input type="text" class="form-control" id="isbn" name="isbn" value="<?= $book->isbn ?>" required>
                </div>
                <p></p>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>