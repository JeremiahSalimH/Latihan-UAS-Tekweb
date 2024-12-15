<?php
    require("../include/head.php");
    require("../include/connection.php");
    if(isset($_POST)){

        $query = "INSERT INTO resi (nomor_resi, tanggal_resi)
                VALUES (:nomor_resi, :tanggal_resi)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':nomor_resi', $_POST['nomor_resi'], PDO::PARAM_STR);
        
        // KALO MAU HASHING PASS
        // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        // $stmt->bindParam(':password', $password, PDO::PARAM_STR);

        $stmt->bindParam(':tanggal_resi', $_POST['tanggal_resi'], PDO::PARAM_STR);

        if($stmt->execute()){
            header("location: ../admin/dashboard.php");
            exit;
        }
        else{
            echo "Query Error";
        }
    }
?>