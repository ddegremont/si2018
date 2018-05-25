<?php
require_once "../includes/connexion.php";

if ($_GET['test'] == 0) {
    
$sql = "DELETE FROM 
  `annonce` 
WHERE 
  `id` = :id
;";
$stmt = $bdd->prepare($sql);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();
errorHandler($stmt);
    
} elseif ($_GET['test'] == 1) {

    $sql = "DELETE FROM 
    `kin` 
    WHERE 
    id = :id;";
    $stmt = $bdd->prepare($sql);
    $stmt->bindValue(':id', $_POST['id']);
    $stmt->execute();
    
} elseif ($_GET['test'] == 2) {

    $sql = "DELETE FROM 
    `moman` 
    WHERE 
    id = :id;";
    $stmt = $bdd->prepare($sql);
    $stmt->bindValue(':id', $_POST['id']);
    $stmt->execute();
    
} elseif ($_GET['test'] == 3) {

    $sql = "DELETE FROM 
    `alde` 
    WHERE 
    id = :id;";
    $stmt = $bdd->prepare($sql);
    $stmt->bindValue(':id', $_POST['id']);
    $stmt->execute();
    
} elseif ($_GET['test'] == 4) {

    $sql = "DELETE FROM 
    `top100` 
    WHERE 
    id = :id;";
    $stmt = $bdd->prepare($sql);
    $stmt->bindValue(':id', $_POST['id']);
    $stmt->execute();
    
}
header("Location: ../admin/index.php");
?>




