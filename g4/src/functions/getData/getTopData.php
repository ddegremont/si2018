<?php
function getTopData(PDO $connection, string $category)
{
    $queryStr = "
        SELECT
            `title`,
            `subtitle`,
            `rank`,
            `imgSrc`,
            `imgAlt`,
            `phone`,
            `address`
        FROM
            `top`
        WHERE
            `category` = :category
        ORDER BY
            `rank`
        ASC
        LIMIT
            100
    ";
    $stmt = $connection->prepare($queryStr);
    $stmt->bindValue(":category", $category);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($stmt->errorInfo()[2]) {
        echo "An unexpected error occurred.";
        exit;
    }
    return $data;
}