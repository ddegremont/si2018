<?php
require_once "../includes/connexion.php";

if ($_GET['test'] == 3) {
    
$sql = "UPDATE 
  `alde` 
SET 
  `name` = :name
WHERE 
  `id` = :id
;";
$stmt = $bdd->prepare($sql);
$stmt->bindValue(':name', $_POST['name']);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();
errorHandler($stmt);

} elseif ($_GET['test'] == 1) {
    
$sql = "UPDATE 
  `kin` 
SET 
  `img` = :img,
  `titre` = :titre
WHERE 
  `id` = :id
;";
$stmt = $bdd->prepare($sql);
$stmt->bindValue(':img', $_POST['img']);
$stmt->bindValue(':titre', $_POST['titre']);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();
errorHandler($stmt);

} elseif ($_GET['test'] == 2) {
    
$sql = "UPDATE 
  `moman` 
SET 
  `img` = :img,
  `url` = :url
WHERE 
  `id` = :id
;";
$stmt = $bdd->prepare($sql);
$stmt->bindValue(':img', $_POST['img']);
$stmt->bindValue(':url', $_POST['url']);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();
errorHandler($stmt);

} elseif ($_GET['test'] == 0) {
    
$sql = "UPDATE 
  `annonce` 
SET 
  `text` = :text
WHERE 
  `id` = :id
;";
$stmt = $bdd->prepare($sql);
$stmt->bindValue(':text', $_POST['text']);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();
errorHandler($stmt);

} elseif ($_GET['test'] == 4) {
    
$sql = "UPDATE 
  `top100` 
SET 
  `id`=:id, 
  `img`=:img, 
  `title`=:title, 
  `location`=:location, 
  `text`=:text, 
  `iframe`=:iframe, 
  `qr`=:qr
WHERE 
  `id` = :id
;";
$stmt = $bdd->prepare($sql);
$stmt->bindValue(':id', $_POST['id']);
$stmt->bindValue(':img', $_POST['img']);
$stmt->bindValue(':title', $_POST['title']);
$stmt->bindValue(':location', $_POST['location']);
$stmt->bindValue(':text', $_POST['text']);
$stmt->bindValue(':iframe', $_POST['iframe']);
$stmt->bindValue(':qr', $_POST['qr']);
$stmt->execute();
errorHandler($stmt);

}
header("Location: ../admin/index.php");
?>