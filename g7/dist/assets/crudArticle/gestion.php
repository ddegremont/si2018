<?php
require_once "doadd.php";
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
  `id`,`title` 
FROM 
  `article`';
$req = $pdo->prepare($reqSql);
$req->execute();

$article=$req->fetchAll(PDO::FETCH_ASSOC);
?>

<h1>Liste des articles</h1>

<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Action</th>
    </tr>

    <?php foreach ($article as $thearticle): ?>
        <tr>
            <td><?=$thearticle['id']?></td>
            <td><?= $thearticle['title']?></td>
            <td><a href="show.php?id=<?= $thearticle['id']?>">Afficher</a></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php require_once "../crudArticle/add.php"; ?>
</body>
</html>