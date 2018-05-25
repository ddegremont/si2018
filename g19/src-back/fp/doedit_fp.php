<?php
/**
 * Created by PhpStorm.
 * User: travailleur
 * Date: 24/05/2018
 * Time: 00:07
 */

if (!isset($_POST['fp_id']) || !isset($_POST['fp_title']) || !isset($_POST['fp_subtitle']) ||
    !isset($_POST['fp_src']) || !isset($_POST['fp_text']) || !isset($_POST['fp_logo']) || !isset($_POST['fp_select']) || !isset($_POST['fp_sign'])
) {
   // header("Location: ../index.php?error=noeditdataposted");
}
require_once "../connexion.php";
$sql = "UPDATE
  `fp`
SET
  `fp_title` = :fp_title,
  `fp_subtitle` = :fp_subtitle,
  `fp_src` = :fp_src,
  `fp_select` = :fp_select,
  `fp_sign` = :fp_sign,
  `fp_logo` = :fp_logo,
  `fp_text` = :fp_text
WHERE
  `fp_id` = :fp_id
;";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':fp_id', $_POST['fp_id']);
$stmt->bindValue(':fp_title', $_POST['fp_title']);
$stmt->bindValue(':fp_subtitle', $_POST['fp_subtitle']);
$stmt->bindValue(':fp_src', $_POST['fp_src']);
$stmt->bindValue(':fp_text', $_POST['fp_text']);
$stmt->bindValue(':fp_sign', $_POST['fp_sign']);
$stmt->bindValue(':fp_select', $_POST['fp_select']);
$stmt->bindValue(':fp_logo', $_POST['fp_logo']);
$stmt->execute();
header("Location: ../admin.php?fp_id=".$_POST['fp_id']);

var_dump($_POST);