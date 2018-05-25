<?php

require_once "../../../db.php";

$_GET['id'];

$sql = "DELETE FROM
          `compagnie`
        WHERE
          `id` = :id
        ;";

$stmt = $conn->prepare($sql);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();
header('Location: ../compagnie_admin.php');