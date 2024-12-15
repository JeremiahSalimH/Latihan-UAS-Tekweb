<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <?php
        require("../include/head.php");
        require("../include/connection.php");
    ?>
</head>
<body>
    <div class="container-fluid vh-100">
        <div class="position-absolute top-50 start-50 translate-middle border col-6">
            <h1 class="text-center bg-dark col-12 text-light p-2">WELCOME</h1>
            <form action="../function/login.php" class="p-4" method="POST">
                <div class="mb-3">
                    <label for="basic-url" class="form-label">Username</label>
                    <div class="input-group">
                        <input type="text" name="username" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="basic-url" class="form-label">Password</label>
                    <div class="input-group">
                        <input type="password" name="password" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                    </div>
                </div>
                <button type="submit" class="btn col-12 btn-dark">Login</button>
            </form>
        </div>
    </div>
</body>
</html>