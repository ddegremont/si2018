<?php
include "../functions/functions.php";
$connection = connect();
foreach ($_POST as $item) {
    if ($item === "") {
        ?>
        Vous devez remplir tous les champs sans EXCEPTION.
        <a href="../../footerUpdate.php">Retour à la liste d'articles</a>
        <?php
        exit;
    }
}
$queryStr = "
    INSERT INTO
        `partners`
    SET 
        `name` = :name,
        `logoSrc` = :logoSrc,
        `logoAlt` = :logoAlt
";
$stmt = $connection->prepare($queryStr);
$stmt->bindValue(":name", $_POST["name"]);
$stmt->bindValue(":logoSrc", $_POST["logoSrc"]);
$stmt->bindValue(":logoAlt", $_POST["logoAlt"]);
$stmt->execute();
header("Location: ../../footerUpdate.php");