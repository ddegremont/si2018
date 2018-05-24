<?php

require_once "../../db.php";

if (!isset($_POST['name']) || !isset($_POST['label']) || !isset($_POST['logo']) || $_POST['name']==="" || $_POST['label']==="" || $_POST['logo']==="") {
    header('Location: ../admin.php?error_input');
    exit();
}


$requete = "INSERT INTO
`compagnie`
(`name`, `label`, `logo`)
VALUES
(:name, :label, :logo)
;";

$stmt = $conn->prepare($requete);
$stmt->bindValue(':name', $_POST['name']);
$stmt->bindValue(':label', $_POST['label']);
$stmt->bindValue(':logo', $_POST['logo']);
$stmt->execute();

header('Location: ../compagnie_admin.php');