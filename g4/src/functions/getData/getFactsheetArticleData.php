<?php
function getFactsheetArticleData(PDO $connection, int $id)
{
    $queryStr = "
        SELECT
            `title`,
            `imgSrc`,
            `imgAlt`,
            `paragraph`,
            `category`,
            `websiteUrl`
        FROM
            `factsheets`
        WHERE
            `id` = :id
    ";
    $stmt = $connection->prepare($queryStr);
    $stmt->bindValue(":id", $id);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($stmt->errorInfo()[2]) {
        echo "An unexpected error occurred.";
        exit;
    }
    return $data;
}