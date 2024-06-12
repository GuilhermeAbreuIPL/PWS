<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2>Create a new account</h2>
            <form action="index.php?c=conta&a=store" method="post">
                <div class="form-group">
                    <label for="numconta">Numero de Conta</label>
                    <input type="text" class="form-control" id="numconta" name="numconta" value="<?php if(isset($conta)) { echo
                    $conta->numconta; }?>" required>
                    <p><?php
                        if(isset($conta->errors)) {
                            if (is_array($conta->errors->on('numconta'))) {
                                foreach ($conta->errors->on('numconta') as $error) {
                                    echo $error . '<br>';
                                }
                            } else {
                                echo $conta->errors->on('numconta');
                            }
                        }
                        ?>
                    </p>
                </div>
                <div class="form-group">
                    <label for="titular">Titular</label>
                    <input type="text" class="form-control" id="titular" name="titular" value="<?php if(isset($conta)) { echo
                    $conta->titular; }?>" required>
                    <?php
                    if(isset($conta->errors)) {
                        if (is_array($conta->errors->on('titular'))) {
                            foreach ($conta->errors->on('titular') as $error) {
                                echo $error . '<br>';
                            }
                        } else {
                            echo $conta->errors->on('titular');
                        }
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="nib">NIB</label>
                    <input type="text" class="form-control" id="nib" name="nib" value="<?php if(isset($conta)) { echo
                    $conta->nib; }?>" required>
                    <?php
                    if(isset($conta->errors)) {
                        if (is_array($conta->errors->on('nib'))) {
                            foreach ($conta->errors->on('nib') as $error) {
                                echo $error . '<br>';
                            }
                        } else {
                            echo $conta->errors->on('nib');
                        }
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?php if(isset($conta)) { echo
                    $conta->numconta; }?>" required>
                    <p><?php
                        if(isset($conta->errors)) {
                            if (is_array($conta->errors->on('email'))) {
                                foreach ($conta->errors->on('email') as $error) {
                                    echo $error . '<br>';
                                }
                            } else {
                                echo $conta->errors->on('email');
                            }
                        }
                        ?>
                    </p
                </div>
                <p></p>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
