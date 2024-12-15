<?php
    require("../include/head.php");
    require("../include/connection.php");
    if(isset($_POST)){

        $query = "INSERT INTO entry_log (tanggal, kota, keterangan, nomor_resi_id)
                VALUES (:tanggal, :kota, :keterangan, :id)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':tanggal', $_POST['tanggal'], PDO::PARAM_STR);
        $stmt->bindParam(':kota', $_POST['kota'], PDO::PARAM_STR);
        $stmt->bindParam(':keterangan', $_POST['keterangan'], PDO::PARAM_STR);
        $stmt->bindParam(':id', $_POST['resi_id'], PDO::PARAM_INT);

        if($stmt->execute()){
            header("location: ../admin/entry-log.php?id={$_POST['resi_id']}&resi={$_POST['resi']}");
            exit;
        }
        else{
            echo "Query Error";
        }
    }
?>