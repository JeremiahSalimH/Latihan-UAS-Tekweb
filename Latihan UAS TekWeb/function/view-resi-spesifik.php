<?php
    require("../include/connection.php");

    $query = "SELECT entry_log.*, resi.nomor_resi FROM entry_log JOIN resi ON entry_log.nomor_resi_id = resi.id WHERE resi.nomor_resi = :resi";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':resi', $_GET['resi'], PDO::PARAM_STR);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Return the data as JSON
    echo json_encode($data);
?>