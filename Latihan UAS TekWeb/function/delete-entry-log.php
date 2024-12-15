<?php
    require("../include/head.php");
    require("../include/connection.php");
    if(isset($_POST)){

        $query = "DELETE FROM entry_log WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $_POST['id'], PDO::PARAM_STR);

        if($stmt->execute()){
            header("location: ../admin/entry-log.php?id={$_POST['resi_id']}&resi={$_POST['resi']}");
            exit;
        }
        else{
            echo "Query Error";
        }
    }
?>