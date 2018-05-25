<?php
/**
 * Created by PhpStorm.
 * User: hichemamb
 * Date: 22/05/2018
 * Time: 07:31
 */
require_once "../includes/connection.php";
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
<?php
$reqSql = 'SELECT
  `id`,`category`,`title`,`sub-title`,`img`,`p`,`auteur`,`logo`
FROM 
  `article`
WHERE 
  `id`=:id';

$req = $pdo->prepare($reqSql);
$req->bindValue(':id',$_GET['id'], PDO::PARAM_INT);
$req->execute();

$article=$req; ?>

<h1>Information sur l'article</h1>

<table>
    <tr>
        <th>Id</th>
        <th>Catégorie</th>
        <th>Titre</th>
        <th>SubTitle</th>
        <th>Img</th>
        <th>Paragraphe</th>
        <th>Auteur</th>
        <th>Logo</th>
    </tr>
    <?php foreach ($article as $thearticle): ?>
        <tr>
            <td><?=$thearticle['id']?></td>
            <td><?= $thearticle['category']?></td>
            <td><?= $thearticle['title']?></td>
            <td><?= $thearticle['sub-title']?></td>
            <td><?= $thearticle['img']?></td>
            <td><?= $thearticle['p']?></td>
            <td><?= $thearticle['auteur']?></td>
            <td><?= $thearticle['logo']?></td>
            <td>
                <a href="remove.php?id=<?= $thearticle['id']?>">Supprimer</a>
                <a href="edit.php?id=<?= $thearticle['id']?>">Modifier</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>

</html>