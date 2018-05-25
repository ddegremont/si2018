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
  `id`,`username`,`password`,`email`,`permission`
FROM 
  `users`
WHERE 
  `id`=:id';
$req = $pdo->prepare($reqSql);
$req->bindValue(':id',$_GET['id'], PDO::PARAM_INT);
$req->execute();

$users=$req;

?>
<?php foreach ($users as $theuser): ?>
    <h1>Êtes vous sur de vouloir supprimer : <?= $theuser['username']?> ? </h1>

<?php endforeach; ?>

<form method="post">
    <input type="submit" name="yes" value="Oui">
    <input type="submit" name="no" value="Non">
</form>


<?php

if(isset($_POST['yes']))
{
    require_once "dodelete.php";
    header("Location: show.php");
}

if(isset($_POST['no']))
{
    header("Location: show.php");

}

?>

</body>

</html>