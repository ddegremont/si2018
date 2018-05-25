<?php
if (!isset($_POST['top_id']) || !isset($_POST['top_class']) || !isset($_POST['top_title']) ||
    !isset($_POST['top_city']) || !isset($_POST['top_select'])
) {
    header("Location: index.php?error=noeditdataposted");
}
require_once "../connexion.php";
$sql = "UPDATE
  `top`
SET
  `top_class` = :top_class,
  `top_title` = :top_title,
  `top_city` = :top_city,
  `top_select` = :top_select
WHERE
  `top_id` = :top_id
;";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':top_id', $_POST['top_id']);
$stmt->bindValue(':top_class', $_POST['top_class']);
$stmt->bindValue(':top_title', $_POST['top_title']);
$stmt->bindValue(':top_select', $_POST['top_select']);
$stmt->bindValue(':top_city', $_POST['top_city']);

$stmt->execute();
header("Location: ../admin.php?top_id=".$_POST['top_id']);
