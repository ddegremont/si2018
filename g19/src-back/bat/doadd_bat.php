<?php
require_once "../connexion.php";

$sql = "INSERT INTO
            bat
            (bat_id, bat_src, bat_title, bat_desc)
            VALUES
            (NULL, :bat_src, :bat_title, :bat_desc)
            ;
            ";

$stmt = $conn->prepare($sql);
$stmt->bindValue(':bat_src', $_POST['bat_src']);
$stmt->bindValue(':bat_title', $_POST['bat_title']);
$stmt->bindValue(':bat_desc', $_POST['bat_desc']);
$stmt->execute();


header("Location: ../index.php");