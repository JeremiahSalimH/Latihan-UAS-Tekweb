<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <?php
        require("../include/head.php");
        require("../include/connection.php");
        session_start();
        if(!isset($_SESSION['username'])){
            header("location: login.php");
        }
    ?>
</head>
<body>
    <?php
        require("navbar.php");
    ?>

    <div class="container-fluid p-3">
        <div class="container-fluid border p-2">
            <h1 class="mb-5">Edit User</h1>
            <div class="container-fluid d-flex flex-row gap-2 p-0">
                <form action="../function/edit-user.php" method="POST">
                    <?php
                        if(isset($_POST)){  
                    ?>
                    <input type="hidden" name="id" value="<?= $_POST['id'] ?>"> 
                    <div class="mb-3">
                        <label for="basic-url" class="form-label">Username</label>
                        <div class="input-group">
                            <input type="text" name="username" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4"  value="<?= $_POST['username'] ?>">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="basic-url" class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" name="password" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark">Submit</button>
                    <?php
                        }
                        else{
                            echo "POST g ada";
                        }
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>
</html>