<?php
    require("../include/head.php");
    require("../include/connection.php");
    if(isset($_POST)){

        $query = "UPDATE user SET username = :username, password = :password WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':username', $_POST['username'], PDO::PARAM_STR);
        $stmt->bindParam(':password', $_POST['password'], PDO::PARAM_STR);

        // KALO MAU HASHING PASS
        // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        // $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        
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