<?php
    $query = "SELECT * FROM resi";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll();
?>