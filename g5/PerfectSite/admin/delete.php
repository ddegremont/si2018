<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Delete</title>
</head>
<body>
  <a href="./">Retour</a>
  <p>Êtes-vous sur de vouloir supprimer l'article?</p>
  <form action="dodelete.php" method="POST">
    <input type="hidden" name="id" value="<?=$_GET['id']?>">
    <input type="submit" value="Oui">
  </form>
</body>
</html>
