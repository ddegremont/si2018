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
";
$stmt = $connection->prepare($queryStr);
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data[rand(0, count($data) - 1)]);