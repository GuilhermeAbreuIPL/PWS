    <!-- Formulário Login-->
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <form class="p-5 border rounded-3 bg-light" action="index.php?c=auth&a=login" method="post">
                    <h1 class="text-center mb-4">Login</h1>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <input type="submit" value="Login" class="btn btn-success w-100">
                </form>
            </div>
        </div>
    </div>


