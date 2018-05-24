<?php

require_once "../db.php";

if (!isset($_GET['id'])) {
    header('Location:admin.php');
    exit();
}

$sql = "SELECT
          `id`,
          `name`
        FROM
          compagnie
        WHERE
          id = :id
;";

$stmt = $conn->prepare($sql);
$stmt->bindValue(":id", $_GET["id"]);
$stmt->execute();
$row=$stmt->fetch(PDO::FETCH_ASSOC);

if (!isset($row['name'])) {
    echo $row["name"];
    header('Location:admin.php');
    exit();
}

?>

<h2>êtes vous sûr de vouloir supprimer <?=$row["name"]?> ?</h2>
<form action="do/dodelete.php" method="post">
    <input type="hidden" name="id" value="<?=$row['id']?>">
    <input type="submit" value="Oui, je le suis">
</form>
<h3><a href="compagnie_admin.php">non oops !!!</a></h3>