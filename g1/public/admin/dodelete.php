<?php
require_once "../includes/functions.php";
require_once "../includes/connection.php";

$sql = "DELETE FROM 
  `page` 
WHERE 
  `id` = :id
;";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();

header("Location:index.php");