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
            <h1 class="mb-5">Input User Baru</h1>
            <div class="container-fluid d-flex flex-row gap-2 p-0">
                <form action="../function/input-user.php" method="POST">
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
                    <button type="submit" class="btn btn-dark">Submit</button>
                </form>
            </div>
            <table class="table mt-3">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Username</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require("../function/view-user.php");
                        if($data){
                            foreach($data as $row){
                    ?>
                    <tr>
                        <td><?= $row[1] ?></td>
                        <td>
                            <div class="d-flex flex-row gap-2">
                                <form action="edit-user.php" method="POST"> 
                                    <input type="hidden" name="id" value="<?= $row[0] ?>"> 
                                    <input type="hidden" name="username" value="<?= $row[1] ?>"> 
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </form>
                                <form action="../function/delete-user.php" method="POST"> 
                                    <input type="hidden" name="id" value="<?= $row[0] ?>">
                                    <input type="hidden" name="username" value="<?= $row[1] ?>"> 
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>