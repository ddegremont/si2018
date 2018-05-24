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
              `date`,
              `from`,
              `to`,
              `image`,
              `alt`,
              `price`
            FROM
              `Bon`
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
            <input placeholder="date" value="<?=$row['date']?>" type="text" name="date">
            <input placeholder="from" value="<?=$row['from']?>" type="text" name="from">
            <input placeholder="to" value="<?=$row['to']?>" type="text" name="to">
            <input placeholder="image" value="<?=$row['image']?>" type="file" name="image">
            <input placeholder="alt" value="<?=$row['alt']?>" type="text" name="alt">
            <input placeholder="price" value="<?=$row['price']?>" type="text" name="price">
            <input placeholder="" type="submit" value="Modifier">
        </form>
    </div>
</body>
</html>
