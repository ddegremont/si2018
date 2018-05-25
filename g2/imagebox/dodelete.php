<?php
require_once "../includes/init_db.php";

if (!isset($_POST["id"]) || $_POST["id"]==="") {
    header("Location: ./?error");
    exit();
}

$sql="DELETE FROM
        `imagebox`
    WHERE
        `id` = :id
;";

$stmt = $db->prepare($sql);
$stmt->bindValue(":id", $_POST["id"]);
$stmt->execute();

header('Location: ./');
