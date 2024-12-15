<?php
    require("../include/head.php");
    require("../include/connection.php");
    if(isset($_POST)){

        $query = "DELETE FROM user WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $_POST['id'], PDO::PARAM_STR);

        if($stmt->execute()){
            header("location: ../admin/user-settings.php");
            exit;
        }
        else{
            echo "Query Error";
        }
    }
?>