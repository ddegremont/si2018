<?php

require_once "../../db.php";

if (!isset($_POST['name']) || !isset($_POST['logo']) || !isset($_POST['alt']) || $_POST['name']==="" || $_POST['logo']==="" || $_POST['alt']==="") {
    header('Location: ../admin.php?error_input');
    exit();
}


$requete = "INSERT INTO
`partenaire`
(`name`, `logo`, `alt`)
VALUES
(:name, :logo, :alt)
;";

$stmt = $conn->prepare($requete);
$stmt->bindValue(':name', $_POST['name']);
$stmt->bindValue(':logo', $_POST['logo']);
$stmt->bindValue(':alt', $_POST['alt']);
$stmt->execute();

header('Location: ../partenaire_admin.php');