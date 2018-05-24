<?php

require_once "db.php";

if (!isset($_POST['entreprise']) || !isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['phone']) || !isset($_POST['message']) || $_POST['entreprise']==="" || $_POST['name']==="" || $_POST['email']==="" || $_POST['phone']==="" || $_POST['message']==="") {
    header('Location: ../admin.php?error_input');
    exit();
}


$requete = "INSERT INTO
`message`
(`type`, `entreprise`, `name`, `email`, `phone`, `message`)
VALUES
(:type, :entreprise, :name, :email, :phone, :message)
;";

$stmt = $conn->prepare($requete);
$stmt->bindValue(':type', $_POST['type']);
$stmt->bindValue(':entreprise', $_POST['entreprise']);
$stmt->bindValue(':name', $_POST['name']);
$stmt->bindValue(':email', $_POST['email']);
$stmt->bindValue(':phone', $_POST['phone']);
$stmt->bindValue(':message', $_POST['message']);
$stmt->execute();

header('Location: ../contact.php');