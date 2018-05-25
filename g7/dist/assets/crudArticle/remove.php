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
require_once "../includes/connection.php";

$reqSql = 'SELECT
  `id`,`category`,`title`,`sub-title`,`img`,`p`,`auteur`,`logo`
FROM 
  `article`
WHERE 
  `id`=:id';
$req = $pdo->prepare($reqSql);
$req->bindValue(':id',$_GET['id'], PDO::PARAM_INT);
$req->execute();

$article=$req;

?>
<?php foreach ($article as $thearticle): ?>
<h1>Êtes vous sur de vouloir supprimer l'article : <?= $thearticle['title']?> ? </h1>

<?php endforeach; ?>

<form method="post">
    <input type="submit" name="yes" value="Oui">
    <input type="submit" name="no" value="Non">
</form>


<?php

if(isset($_POST['yes']))
{
    require_once "doremove.php";
    header("Location: gestion.php");
}

if(isset($_POST['no']))
{
    header("Location: gestion.php");

}

?>

</body>

</html>