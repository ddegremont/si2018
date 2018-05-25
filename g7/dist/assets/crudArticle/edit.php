<?php
/**
 * Created by PhpStorm.
 * User: hichemamb
 * Date: 22/05/2018
 * Time: 02:35
 */

require_once "doedit.php";
require_once "../includes/connection.php";
require_once "../includes/upload.php";


$reqSql = $reqSql = 'SELECT
  `id`,`category`,`title`,`sub-title`,`img`,`p`,`auteur`,`logo`
FROM 
  `article`
WHERE 
  `id`=:id';
;
$req = $pdo->prepare($reqSql);
$req->bindValue(':id',$_GET['id'], PDO::PARAM_INT);
$req->execute();

$row = $req ->fetch(PDO::FETCH_ASSOC);

?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion</title>
</head>

<body>

<h1>Modification de l'article </h1>

<form method="POST"  enctype="multipart/form-data">
    <select name="category" required data-error="Selectionner une catégorie" size="1">
        <option value disabled selected>Catégorie:</option>
        <option value="Gastronomie">Gastronomie</option>
        <option value="Bien-être">Bien-être</option>
        <option value="Culture">Culture</option>
        <option value="Sport">Sport</option>
    </select></br></br>

    <label>title:</label>
    <input type="text" name="title" value="<?= $row['title']?>"></br></br>

    <label>sub-title:</label>
    <input type="text" name="sub-title" value="<?= $row['sub-title']?>"></br></br>

    <label>Choisissez une image à insérer:</br></br></label>
    <input type="file" name="img"  /></br></br>

    <label>p:</label>
    <input type="text" name="p" value="<?= $row['p']?>"></br></br>

    <label>Ajoutez votre nom:</br></br></label>
    <input type="text" name="auteur" value="<?= $row['auteur']?>"/></br></br>

    <label>Ajoutez votre logo:</br></br></label>
    <input type="file" name="logo"/></br></br>

    <input type="submit" name="submit" value="Modifier"></br></br>
</form>


</body>
</html>

