<?php
require_once "../includes/connexion.php";

$sql = "SELECT
            `h2`,
            `text`,
            `img`
        FROM
            `article`
        WHERE
            `id` = :id
        LIMIT 1
        ;";

$stmt = $db->prepare($sql);
$stmt->bindParam(":id",$_GET['id'], PDO::PARAM_STR);
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($row === false) {
    header("Location: ./?error");
}

?>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <title>Edit</title>
 </head>
 <body>
    <a href="./">Retour</a>
    <form action="doedit.php" method="post">
       <input type="hidden" name="id" value="<?=$_GET['id']?>">
       <p>Titre:
         <input type="text" name="h2" value="<?=$row['h2']?>">
       </p>
       <p>Sous-titre:
         <input type="text" name="text" value="<?=$row['text']?>">
       </p>
       <p>Img:
          <input type="text" name="img" value="<?=$row['img']?>">
       </p>
       <button type="submit">modifier</button>
        <button><a href="delete.php?id=<?= $_GET['id'] ?>">supprimer</a></button>
    </form>
 </body>
</html>
