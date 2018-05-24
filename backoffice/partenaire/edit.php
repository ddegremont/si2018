<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 01/05/2018
 * Time: 18:09
 */
session_start();
require_once "../connection.php";
$request = 'SELECT
              `id`,
              `name`,
              `image`,
              `alt`,
              `type`
            FROM
              `Partenaire`
            WHERE
              `id` = :id
                ;';

$stmt = $connection->prepare($request);
$stmt->bindParam(':id', $_GET['id']);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<body>
<div class="container">
    <div class="row">
        <h1><strong>Modifier</strong></h1>
        <form action="doedit.php" method="post">
            <input type="hidden" name="id" value="<?=$_GET['id']?>" placeholder="id">
            <input placeholder="name" value="<?=$row['name']?>" type="text" name="name">
            <input placeholder="image" value="<?=$row['image']?>" type="text" name="image">
            <input placeholder="alt" value="<?=$row['alt']?>" type="text" name="alt">
            <input placeholder="type" value="<?=$row['type']?>" type="text" name="type">
            <input placeholder="" type="submit" value="Modifier">
        </form>
    </div>
</body>
</html>
