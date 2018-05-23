<?php
include "../functions/functions.php";
$connection = connect();
$queryStr = "
    UPDATE
        `factsheets`
    SET
        `title` = :title,
        `category` = :category,
        `imgSrc` = :imgSrc,
        `imgAlt` = :imgAlt,
        `paragraph` = :paragraph,
        `websiteUrl` = :websiteUrl
    WHERE
        `id` = :id
";
var_dump($_POST);
$stmt = $connection->prepare($queryStr);
$stmt->bindValue(":title", $_POST["title"]);
$stmt->bindValue(":category", $_POST["category"]);
$stmt->bindValue(":imgSrc", $_POST["imgSrc"]);
$stmt->bindValue(":imgAlt", $_POST["imgAlt"]);
$stmt->bindValue(":paragraph", $_POST["paragraph"]);
$stmt->bindValue(":websiteUrl", $_POST["websiteUrl"]);
$stmt->bindValue(":id", $_POST["id"]);
$stmt->execute();
header("Location: ../../factsheets.php");