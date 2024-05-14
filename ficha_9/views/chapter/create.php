<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2>Create a new Chapter for Book: <?= $book->name ?></h2>
            <form action="index.php?c=chapter&a=store" method="post">
                <div class="form-group">
                    <p></p>
                    <label for="name">Name do Capitulo: </label>
                    <input type="text" name="name" value="<?php if(isset($chapter)) { echo
                    $chapter->name; }?>">
                    <p><?php
                        if(isset($book->errors)) {
                            if (is_array($chapter->errors->on('name'))) {
                                foreach ($chapter->errors->on('name') as $error) {
                                    echo $error . '<br>';
                                }
                            } else {
                                echo $chapter->errors->on('name');
                            }
                        }
                        ?>
                    </p>
                </div>
                <input type="hidden" name="book_id" value="<?= $id ?>">
                <p></p>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>