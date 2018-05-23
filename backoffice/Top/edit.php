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
              `title`,
              `texte`,
              `image`,
              `alt`,
              `pdate`,
              `auteur`,
              `signature`,
              `logo`  
            FROM
              `Article`
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
            <input placeholder="title" value="<?=$row['title']?>" type="text" name="title">
            <input placeholder="texte" value="<?=$row['texte']?>" type="text" name="texte">
            <input placeholder="image" value="<?=$row['image']?>" type="text" name="image">
            <input placeholder="alt" value="<?=$row['alt']?>" type="text" name="alt">
            <input placeholder="date" value="<?=$row['pdate']?>" type="date" name="pdate">
            <input placeholder="auteur" value="<?=$row['auteur']?>" type="text" name="auteur">
            <input placeholder="signature" value="<?=$row['signature']?>" type="text" name="signature">
            <input placeholder="logo" value="<?=$row['logo']?>" type="text" name="logo">
            <input placeholder="" type="submit" value="Modifier">
        </form>
    </div>
</body>
</html>
