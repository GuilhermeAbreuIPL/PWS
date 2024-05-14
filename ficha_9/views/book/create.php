<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2>Create a new Book</h2>
            <form action="index.php?c=book&a=store" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="<?php if(isset($book)) { echo
                    $book->name; }?>">
                    <p><?php
                        if(isset($book->errors)) {
                            if (is_array($book->errors->on('name'))) {
                                foreach ($book->errors->on('name') as $error) {
                                    echo $error . '<br>';
                                }
                            } else {
                                echo $book->errors->on('name');
                            }
                        }
                        ?>
                    </p>
                </div>

                <div class="form-group mt-2">
                    <label for="isbn">ISBN</label>
                    <input type="text" name="isbn" value="<?php if(isset($book)) { echo
                    $book->isbn; }?>">
                    <p><?php
                        if(isset($book->errors)) {
                            if (is_array($book->errors->on('isbn'))) {
                                foreach ($book->errors->on('isbn') as $error) {
                                    echo $error . '<br>';
                                }
                            } else {
                                echo $book->errors->on('isbn');
                            }
                        }
                        ?>
                    </p>
                </div>
                <div class="form-group mt-2">
                    <div class="btn-group">
                        <label for="genre_id">Genre
                            <div>
                                <select class="form-select" name="genre_id" aria-label="Default select example">
                                    <?php foreach ($genres as $genero) { ?>
                                        <tr>
                                            <td>

                                                <option value=" <?=$genero->id ?>"> <?= $genero->name ?> </option>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    <p><?php
                                        if(isset($book->errors)) {
                                            if (is_array($book->errors->on('genre_id'))) {
                                                foreach ($book->errors->on('genre_id') as $error) {
                                                    echo $error . '<br>';
                                                }
                                            } else {
                                                echo $book->errors->on('genre_id');
                                            }
                                        }
                                        ?>
                                    </p>
                                </select>
                            </div>
                        </label>
                    </div>
                </div>
                <p></p>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>