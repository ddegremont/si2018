<?php
include "../../../functions/connect/connect.php";
$connection = connect();
$queryStr = "
    SELECT
        `id`,
        `title`,
        `subtitle`,
        `imgSrc`,
        `imgAlt`
    FROM
        `imagebox`
    WHERE
        `category` = :cat
";
$stmt = $connection->prepare($queryStr);
$stmt->bindValue(":cat", $_GET["category"]);
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data[rand(0, count($data) - 1)]);