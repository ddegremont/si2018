<?php
if (!isset($_POST['top_id'])) {
    header("Location: ../index.php?error=noidtodelete");
    exit;
}
require_once "../connexion.php";
$sql = "DELETE FROM 
  `top` 
WHERE 
  `top_id` = :top_id
;";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':top_id', $_POST['top_id']);
$stmt->execute();
header("Location: ../admin.php");