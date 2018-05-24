<?php

require_once "../../../db.php";

if (!isset($_POST['title']) || !isset($_POST['subtitle']) || !isset($_POST['img']) || !isset($_POST['text']) || !isset($_POST['tag']) || $_POST['title']==="" || $_POST['subtitle']==="" || $_POST['img']==="" || $_POST['text']==="") {
    header('Location: ../admin.php?error_input');
    exit();
}


$requete = "INSERT INTO
`article`
(`title`, `subtitle`, `img`, `text`, `tag`, `compagnie`)
VALUES
(:title, :subtitle, :img, :text, :tag, :compagnie)
;";

$stmt = $conn->prepare($requete);
$stmt->bindValue(':title', $_POST['title']);
$stmt->bindValue(':subtitle', $_POST['subtitle']);
$stmt->bindValue(':img', $_POST['img']);
$stmt->bindValue(':text', $_POST['text']);
$stmt->bindValue(':tag', $_POST['tag']);
$stmt->bindValue(':compagnie', $_POST['compagnie']);
$stmt->execute();

header('Location: ../article_admin.php');