<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 01/05/2018
 * Time: 18:09
 */
require_once "../connection.php";
$request = 'SELECT
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
            <input placeholder="desc" value="<?=$row['desc']?>" type="text" name="desc">
            <input placeholder="location" value="<?=$row['location']?>" type="text" name="location">
            <input placeholder="rating" value="<?=$row['rating']?>" type="text" name="rating">
            <input placeholder="cost" value="<?=$row['cost']?>" type="text" name="cost">
            <input placeholder="" type="submit" value="Modifier">
        </form>
    </div>
</body>
</html>
