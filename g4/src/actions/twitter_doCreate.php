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
        `twitter`
    SET 
        `url` = :url,
        `name` = :name
";
$stmt = $connection->prepare($queryStr);
$stmt->bindValue(":url", $_POST["url"]);
$stmt->bindValue(":name", $_POST["name"]);
$stmt->execute();
header("Location: ../../companies.php");