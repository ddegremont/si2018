<?php

require_once "../../db.php";

$_GET['id'];

$sql = "DELETE FROM
          `hundred`
        WHERE
          `id` = :id
        ;";

$stmt = $conn->prepare($sql);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();
header('Location: ../hundred_admin.php');