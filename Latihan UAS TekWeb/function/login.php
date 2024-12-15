<?php
    require("../include/head.php");
    require("../include/connection.php");
    if(isset($_POST)){
        $query = "SELECT password FROM user WHERE username = :username";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':username', $_POST['username'], PDO::PARAM_STR);
        $stmt->execute();

        $storedPass = $stmt->fetchColumn();

        if($_POST['password'] == $storedPass){ //Ganti ke password_verify($_POST['password'], $storedPass) kalo pake hash
            session_start();
            session_regenerate_id();
            $_SESSION['username'] = $_POST['username'];
            header("location: ../admin/dashboard.php");
            exit;
        }
        else{
            header("location: ../admin/login.php");
            exit;
        }
    }
?>