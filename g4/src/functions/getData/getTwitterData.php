<?php
function getTwitterData(PDO $connection)
{
    $queryStr = "
        SELECT
            `name`,
            `url`,
            `id`
        FROM
            `twitter`
    ";
    $stmt = $connection->prepare($queryStr);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($stmt->errorInfo()[2]) {
        echo "An unexpected error occurred.";
        exit;
    }
    return $data;
}