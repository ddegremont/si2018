<?php
if (!isset($_POST['bat_id']) || !isset($_POST['bat_src']) || !isset($_POST['bat_title']) ||
    !isset($_POST['bat_desc'])
) {
    header("Location: ../index.php?error=noeditdataposted");
}
require_once "../connexion.php";
$sql = "UPDATE
  `bat`
SET
  `bat_src` = :bat_src,
  `bat_title` = :bat_title,
  `bat_desc` = :bat_desc
WHERE
  `bat_id` = :bat_id
;";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':bat_id', $_POST['bat_id']);
$stmt->bindValue(':bat_src', $_POST['bat_src']);
$stmt->bindValue(':bat_title', $_POST['bat_title']);
$stmt->bindValue(':bat_desc', $_POST['bat_desc']);


$stmt->execute();
header("Location: ../admin.php?bat_id=".$_POST['bat_id']);
