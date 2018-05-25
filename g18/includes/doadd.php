<?php
require_once "../includes/connexion.php";

if ($_GET['test'] == 3) {
    
    $sql = "INSERT INTO 
      `alde` 
      (`name`)
    VALUES
      (:name)
    ;";
    $stmt = $bdd->prepare($sql);
    $stmt->bindValue(':name', $_POST['name']);
    $stmt->execute();
    errorHandler($stmt);

} elseif ($_GET['test'] == 1) {

    $sql = "INSERT INTO 
      `kin` 
      (`img`,
	  `titre`)
    VALUES
      (:img,
	  :titre)
    ;";
    $stmt = $bdd->prepare($sql);
    $stmt->bindValue(':img', $_POST['img']);
    $stmt->bindValue(':titre', $_POST['titre']);
    $stmt->execute();
    errorHandler($stmt);
    
} elseif ($_GET['test'] == 2) {

    $sql = "INSERT INTO 
      `moman` 
      (`img`,
      `url`)
    VALUES
      (:img,
      :url)
    ;";
    $stmt = $bdd->prepare($sql);
    $stmt->bindValue(':img', $_POST['img']);
    $stmt->bindValue(':url', $_POST['url']);
    $stmt->execute();
    errorHandler($stmt);
    
} elseif ($_GET['test'] == 0) {

    $sql = "INSERT INTO 
      `annonce` 
      (`text`)
    VALUES
      (:text)
    ;";
    $stmt = $bdd->prepare($sql);
    $stmt->bindValue(':text', $_POST['text']);
    $stmt->execute();
    errorHandler($stmt);
    
}    elseif ($_GET['test'] == 4) {

    $sql = "INSERT INTO 
      `top100` 
      (`img`, 
	  `title`, 
	  `location`, 
	  `text`, 
	  `iframe`, 
	  `qr`)
    VALUES
      ( :img, 
	  :title, 
	  :location, 
	  :text, 
	  :iframe, 
	  :qr)
    ;";
    $stmt = $bdd->prepare($sql);
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