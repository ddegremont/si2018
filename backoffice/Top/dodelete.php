<?php

require_once "../connection.php";
$request =
    'DELETE FROM
    `Article`
    WHERE
    `id` = :id
;';
$stmt = $connection->prepare($request);
$stmt->bindParam(':id', htmlspecialchars($_POST['id']));
$stmt->execute();

header('Location: index.php');
