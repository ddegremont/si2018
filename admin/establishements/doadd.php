<?php
if (!isset($_POST['establishement'])) {
    header("Location: index.php?error=nopostdata");
    exit;
}
require_once "../connection.php";
require_once "../functions.php";
$establishement = $_POST['establishement'];
$sql = "INSERT INTO `establishement` (
  `name`,
  `city_name`,
  `country_name`,
  `cover_img_src`,
  `desc`,
  `address`,
  `papers`,
  `type`,
  `type_details`,
  `pricing`,
  `pricing_details`,
  `vaccin`,
  `rating`,
  `slug`,
  `first_mont`,
  `first_month_temp`,
  `last_month`,
  `last_month_temp`
)
VALUES(
  :name,
  :city_name,
  :country_name,
  :cover_img_src,
  :desc,
  :address,
  :papers,
  :type,
  :type_details,
  :pricing,
  :pricing_details,
  :vaccin,
  :rating,
  :slug,
  :first_month,
  :first_month_temp,
  :last_month,
  :last_month_temp
);";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $establishement['name']);
$stmt->bindValue(':city_name', $establishement['city_name']);
$stmt->bindValue(':country_name', $establishement['country_name']);
$stmt->bindValue(':cover_img_src', $establishement['cover_img_src']);
$stmt->bindValue(':desc', $establishement['desc']);
$stmt->bindValue(':address', $establishement['address']);
$stmt->bindValue(':papers', $establishement['papers']);
$stmt->bindValue(':type', $establishement['type']);
$stmt->bindValue(':type_details', $establishement['type_details']);
$stmt->bindValue(':pricing', $establishement['pricing']);
$stmt->bindValue(':pricing_details', $establishement['pricing_details']);
$stmt->bindValue(':vaccin', $establishement['vaccin']);
$stmt->bindValue(':rating', $establishement['rating']);
$stmt->bindValue(':slug', $establishement['slug']);
$stmt->bindValue(':first_month', $establishement['first_month']);
$stmt->bindValue(':first_month_temp', $establishement['first_month_temp']);
$stmt->bindValue(':last_month', $establishement['last_month']);
$stmt->bindValue(':last_month_temp', $establishement['last_month_temp']);
$stmt->execute();
handlePDOError($stmt);
header("Location: index.php");