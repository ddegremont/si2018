<?php
include "../functions/functions.php";
$connection = connect();
foreach ($_POST as $item) {
    if ($item === "") {
        ?>
        Vous devez remplir tous les champs sans EXCEPTION.
        <a href="../../news.php">Retour à la liste d'articles</a>
        <?php
        exit;
    }
}
$queryStr = "
    INSERT INTO
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
";
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
$stmt->execute();
header("Location: ../../news.php");