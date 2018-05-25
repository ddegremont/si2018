<?php

require_once "../../db.php";

if (!isset($_POST['name']) || !isset($_POST['link']) || $_POST['name']==="" || $_POST['link']==="") {
    header('Location: ../admin.php?error_input');
    exit();
}


$requete = "INSERT INTO
`twitter`
(`name`, `link`)
VALUES
(:name, :link)
;";

$stmt = $conn->prepare($requete);
$stmt->bindValue(':name', $_POST['name']);
$stmt->bindValue(':link', $_POST['link']);
$stmt->execute();

header('Location: ../twitter_admin.php');