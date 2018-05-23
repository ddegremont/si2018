<?php
include "../functions/functions.php";
$connection = connect();
$queryStr = "
    UPDATE
        `news`
    SET
        `title` = :title,
        `subtitle` = :subtitle,
        `company` = :company,
        `imgSrc` = :imgSrc,
        `imgAlt` = :imgAlt,
        `paragraph` = :paragraph,
        `signature` = :signature,
        `logoSrc` = :logoSrc,
        `logoAlt` = :logoAlt
    WHERE
        `id` = :id
";
var_dump($_POST);
$stmt = $connection->prepare($queryStr);
$stmt->bindValue(":title", $_POST["title"]);
$stmt->bindValue(":subtitle", $_POST["subtitle"]);
$stmt->bindValue(":company", $_POST["company"]);
$stmt->bindValue(":imgSrc", $_POST["imgSrc"]);
$stmt->bindValue(":imgAlt", $_POST["imgAlt"]);
$stmt->bindValue(":paragraph", $_POST["paragraph"]);
$stmt->bindValue(":signature", $_POST["signature"]);
$stmt->bindValue(":logoSrc", $_POST["logoSrc"]);
$stmt->bindValue(":logoAlt", $_POST["logoAlt"]);
$stmt->bindValue(":id", $_POST["id"]);
$stmt->execute();
header("Location: ../../news.php");