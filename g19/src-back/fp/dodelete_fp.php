<?php
/**
 * Created by PhpStorm.
 * User: travailleur
 * Date: 24/05/2018
 * Time: 00:51
 */

if (!isset($_POST['fp_id'])) {
    header("Location: ../index.php?error=noidtodelete");
    exit;
}
require_once "../connexion.php";
$sql = "DELETE FROM 
  `fp` 
WHERE 
  `fp_id` = :fp_id
;";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':fp_id', $_POST['fp_id']);
$stmt->execute();
header("Location: ../admin.php");