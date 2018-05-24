<?php
function getNewsData(PDO $connection)
{
    $queryStr = "
        SELECT
            `id`,
            `title`,
            `subtitle`,
            `imgSrc`,
            `imgAlt`,
            `paragraph`,
            `signature`,
            `logoSrc`,
            `logoAlt`,
            `company`
        FROM
            `news`
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