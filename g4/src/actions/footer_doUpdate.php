<?php
include "../functions/functions.php";
$connection = connect();
$queryStr = "
    UPDATE
        `partners`
    SET
        `name` = :name,
        `logoSrc` = :logoSrc,
        `logoAlt` = :logoAlt
    WHERE
        `id` = :id
";
$stmt = $connection->prepare($queryStr);
$stmt->bindValue(":name", $_POST["name"]);
$stmt->bindValue(":logoSrc", $_POST["logoSrc"]);
$stmt->bindValue(":logoAlt", $_POST["logoAlt"]);
$stmt->bindValue(":id", $_POST["id"]);
$stmt->execute();
header("Location: ../../footerUpdate.php");