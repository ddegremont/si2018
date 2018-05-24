<?php
include "../functions/functions.php";
$connection = connect();
foreach ($_POST as $item) {
    if ($item === "") {
        ?>
        Vous devez remplir tous les champs sans EXCEPTION.
        <a href="../../factsheets.php">Retour à la liste d'articles</a>
        <?php
        exit;
    }
}
$queryStr = "
    INSERT INTO
        `factsheets`
    SET 
        `title` = :title,
        `imgSrc` = :imgSrc,
        `imgAlt` = :imgAlt,
        `paragraph` = :paragraph,
        `category` = :category,
        `websiteUrl` = :websiteUrl
";
$stmt = $connection->prepare($queryStr);
$stmt->bindValue(":title", $_POST["title"]);
$stmt->bindValue(":imgSrc", $_POST["imgSrc"]);
$stmt->bindValue(":imgAlt", $_POST["imgAlt"]);
$stmt->bindValue(":paragraph", $_POST["paragraph"]);
$stmt->bindValue(":category", $_POST["category"]);
$stmt->bindValue(":websiteUrl", $_POST["websiteUrl"]);
$stmt->execute();
header("Location: ../../factsheets.php");