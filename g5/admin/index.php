<?php
require_once "../includes/connexion.php";

$sql = "SELECT
       `id`,
       `h2`
    FROM
       `article`
    ;";

$stmt = $db->prepare($sql);
$stmt->execute();
$tableData = $stmt -> fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
 </head>
 <body>
    <a href="../index.php">Retour</a>
    <h2>Liste des pages</h2>
    <table>
      <tr>
          <th>id</th>
          <th>Titre</th>
      </tr>
    <?php
      foreach ($tableData as $row){
          ?>
          <tr>
              <td><?=$row['id']?></td>
              <td><a href="edit.php?id=<?=$row['id']?>"><?=$row['h2']?></a></td>
          </tr>
          <?php
      }
    ?>
    </table>

    <h2>Ajouter un article : </h2>
    <form action="doadd.php" method="post">
      <p>Titre:
        <input type="text" name="h2" value="">
      </p>
      <p>Sous-Titre:
        <input type="text" name="text" value="">
      </p>
      <p>Img:
          <input type="text" name="img" value="">
      </p>
      <input type="submit" value="Ajouter">
    </form>
  </body>
</html>
