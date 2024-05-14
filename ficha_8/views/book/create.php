<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2>Create a new Book</h2>
            <form action="index.php?c=book&a=store" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="<?php if(isset($book)) { echo
                    $book->name; }?>">
                    <?php if(isset($book->errors)){ echo $book->errors->on('name'); }?>
                </div>

                <div class="form-group mt-2">
                    <label for="isbn">ISBN</label>
                    <input type="text" name="isbn" value="<?php if(isset($book)) { echo
                    $book->isbn; }?>">
                    <?php if(isset($book->errors)){ echo $book->errors->on('isbn'); }?>
                </div>
                <p></p>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>