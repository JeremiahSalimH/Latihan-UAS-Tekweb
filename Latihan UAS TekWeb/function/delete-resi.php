<?php
    require("../include/head.php");
    require("../include/connection.php");
    if(isset($_POST)){

        $query = "DELETE FROM resi WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $_POST['id'], PDO::PARAM_STR);

        if($stmt->execute()){
            header("location: ../admin/dashboard.php");
            exit;
        }
        else{
            echo "Query Error";
        }
    }
?>