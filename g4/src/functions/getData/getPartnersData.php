<?php
function getPartnersData(PDO $connection)
{
    $queryStr = "
        SELECT
            `id`,
            `name`,
            `logoSrc`,
            `logoAlt`
        FROM
            `partners`
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