<?php
function getFactsheetData(PDO $connection)
{
    $queryStr = "
        SELECT
            `id`,
            `title`,
            `imgSrc`,
            `imgAlt`,
            `paragraph`,
            `category`,
            `websiteUrl`
        FROM
            `factsheets`
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