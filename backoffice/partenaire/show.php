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
              `image`,
              `alt`,
              `type`
            FROM
              `Partenaire`
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
                    <th class="name">Name</th>
                    <th class="name">Image</th>
                    <th class="name">Alt</th>
                    <th class="name">Type</th>
                </tr>
                </thead>
                <tr>
                    <td><?=$row['id']?></td>
                    <td><?=$row['name']?></td>
                    <td><?=$row['image']?></td>
                    <td><?=$row['alt']?></td>
                    <td><?=$row['type']?></td>
                </tr>

            </table>
            <a href="edit.php?id=<?=$row['id']?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span>Edit </a>
            <a href="delete.php?id=<?=$row['id']?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span>Delete </a>
        </div>
    </div>
</body>

