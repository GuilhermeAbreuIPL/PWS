<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2>Create a new Genre</h2>
            <form action="index.php?c=genre&a=store" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="<?php if(isset($genre)) { echo
                    $genre->name; }?>">
                    <p><?php
                        if(isset($genre->errors)) {
                            if (is_array($genre->errors->on('name'))) {
                                foreach ($genre->errors->on('name') as $error) {
                                    echo $error . '<br>';
                                }
                            } else {
                                echo $genre->errors->on('name');
                            }
                        }
                        ?>
                    </p>
                </div>
                <p></p>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
