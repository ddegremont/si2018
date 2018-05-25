<?php
require_once "../includes/connexion.php";

$sql="DELETE FROM
`article`
WHERE
`id` = :id
;";

$stmt = $db->prepare($sql);
$stmt->bindValue(":id", $_POST["id"]);
$stmt->execute();

header('Location: index.php');
