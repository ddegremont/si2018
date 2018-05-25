<?php
/**
 * Created by PhpStorm.
 * User: travailleur
 * Date: 23/05/2018
 * Time: 18:20
 */


if (!isset($_GET['bat_id'])) {
    header("Location: index.php?error=noidtoedit");
    exit;
}
require_once "../connexion.php";

$sql = "SELECT 
  `bat_id`, 
  `bat_src`, 
  `bat_title`,
  `bat_desc`
FROM
  `bat`
WHERE 
  `bat_id` = :bat_id
;";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':bat_id', $_GET['bat_id']);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ($row === false) {
    header("Location: ../index.php?error=nodatatodelete");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>delete</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <style>
    span{
    color: red;
    weight: bold;
    }

        div{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 500px;
            background: #eee;
            box-shadow: 0 10px 20px rgba(0,0,0,0.5);
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>
<div>
    <p>voulez vous vraiment supprimer <span><?=$row['bat_title']?></span> de la  boite à image ?</p>
    <form action="dodelete_bat.php" method="post">
        <input type="hidden" name="bat_id" value="<?=$row['bat_id']?>">
        <input type="submit" value="Oui" class="btn btn-danger">
        <a href="../admin.php" class="btn btn-primary">non</a>
    </form>
</div>
</body>
</html>