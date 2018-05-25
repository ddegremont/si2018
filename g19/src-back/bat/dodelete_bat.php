<?php
/**
 * Created by PhpStorm.
 * User: travailleur
 * Date: 23/05/2018
 * Time: 18:25
 */


if (!isset($_POST['bat_id'])) {
    header("Location: ../index.php?error=noidtodelete");
    exit;
}
require_once "../connexion.php";
$sql = "DELETE FROM 
  `bat` 
WHERE 
  `bat_id` = :bat_id
;";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':bat_id', $_POST['bat_id']);
$stmt->execute();
header("Location: ../admin.php");