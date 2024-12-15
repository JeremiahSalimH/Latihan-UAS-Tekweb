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
            <h1 class="mb-5">Entry Log <?= $_GET['resi'] ?></h1>
            <form action="dashboard.php" class="mb-5"> 
                <button type="submit" class="btn btn-primary">Back</button>
            </form>
            <div class="container-fluid d-flex flex-row gap-2 p-0">
                <form action="../function/input-entry-log.php" method="POST">
                    <div class="mb-3">
                        <input type="hidden" name="resi_id" value="<?= $_GET['id'] ?>">
                        <input type="hidden" name="resi" value="<?= $_GET['resi'] ?>">
                        <label for="basic-url" class="form-label">Tanggal Resi</label>
                        <div class="input-group">
                            <input type="date" name="tanggal" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                        </div>
                        <label for="basic-url" class="form-label">Kota</label>
                        <div class="input-group">
                            <input type="text" name="kota" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                        </div>
                        <label for="basic-url" class="form-label">Keterangan</label>
                        <div class="input-group">
                            <input type="text" name="keterangan" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark">Submit</button>
                </form>
            </div>
            <table class="table mt-3">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Kota</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require("../function/view-entry-log.php");
                        if($data){
                            foreach($data as $row){
                    ?>
                    <tr>
                        <td><?= date("d/m/Y", strtotime($row[1])) ?></td>
                        <td><?= $row[2] ?></td>
                        <td><?= $row[3] ?></td>
                        <td>
                            <div class="d-flex flex-row gap-2">
                                <form action="../function/delete-entry-log.php" method="POST"> 
                                    <input type="hidden" name="id" value="<?= $row[0] ?>">
                                    <input type="hidden" name="resi_id" value="<?= $_GET['id'] ?>">
                                    <input type="hidden" name="resi" value="<?= $_GET['resi'] ?>">
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