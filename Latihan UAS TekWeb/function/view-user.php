<?php
    $query = "SELECT * FROM user";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll();
?>