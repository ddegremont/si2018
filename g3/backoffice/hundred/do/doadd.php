<?php

require_once "../../../db.php";

if (!isset($_POST['name']) || !isset($_POST['adresse']) || !isset($_POST['classement']) || !isset($_POST['phone']) || !isset($_POST['price']) || $_POST['name']==="" || $_POST['adresse']==="" || $_POST['classement']==="" || $_POST['phone']==="" || $_POST['price']==="") {
    header('Location: ../admin.php?error_input');
    exit();
}


$requete = "INSERT INTO
`hundred`
(`name`, `adresse`, `classement`, `phone`, `price`)
VALUES
(:name, :adresse, :classement, :phone, :price)
;";

$stmt = $conn->prepare($requete);
$stmt->bindValue(':name', $_POST['name']);
$stmt->bindValue(':adresse', $_POST['adresse']);
$stmt->bindValue(':classement', $_POST['classement']);
$stmt->bindValue(':phone', $_POST['phone']);
$stmt->bindValue(':price', $_POST['price']);
$stmt->execute();

header('Location: ../hundred_admin.php');