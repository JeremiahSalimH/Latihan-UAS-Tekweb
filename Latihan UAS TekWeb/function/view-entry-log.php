<?php
    $query = "SELECT * FROM entry_log WHERE nomor_resi_id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_STR);
    $stmt->execute();
    $data = $stmt->fetchAll();
?>