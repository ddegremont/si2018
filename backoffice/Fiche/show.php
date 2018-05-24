<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 05/05/2018
 * Time: 17:39
 */

session_start();
require_once "../connection.php";

$request = "SELECT 
              `id`,
              `name`,
              `desc`,
              `location`,
              `rating`,
              `cost`
            FROM
              `Fiche`
            WHERE 
              `id` = :id
;";
$stmt = $connection->prepare($request);
$stmt->bindParam(':id', $_GET['id']);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ($row === false) {
    header("Location: index.php?error=nodatatodetails");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="./../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="./../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body>
<div>
    <div class="container">
        <div class="row">
    <a style="font-size: 50px;" href="index.php">Retour vers l'admin</a>
            <table class="table table-stripped table-bordered">
                <thead>
                <tr>
                    <th class="name">ID</th>
                    <th class="name">name</th>
                    <th class="name">desc</th>
                    <th class="name">location</th>
                    <th class="name">rating</th>
                    <th class="name">cost</th>
                </tr>
                </thead>
                <tr>
                    <td><?= $row['id']?></td>
                    <td><?= $row['name']?></td>
                    <td><?= $row['desc']?></td>
                    <td><?= $row['location']?></td>
                    <td><?= $row['rating']?></td>
                    <td><?= $row['cost']?></td>
                </tr>

            </table>
<a href="edit.php?id=<?=$row['id']?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span>Edit </a>
<a href="delete.php?id=<?=$row['id']?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span>Delete </a>
    </div>
</div>
</body>
