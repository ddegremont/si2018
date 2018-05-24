<?php

require_once "../../db.php";

$_GET['id'];

$sql = "DELETE FROM
          `twitter`
        WHERE
          `id` = :id
        ;";

$stmt = $conn->prepare($sql);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();
header('Location: ../twitter_admin.php');