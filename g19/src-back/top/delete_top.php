<?php
/**
 * Created by PhpStorm.
 * User: travailleur
 * Date: 23/05/2018
 * Time: 16:09
 */

if (!isset($_GET['top_id'])) {
    header("Location: index.php?error=noidtoedit");
    exit;
}
require_once "../connexion.php";

$sql = "SELECT 
  `top_id`, 
  `top_class`, 
  `top_title`,
  `top_city`,
  `top_select` 
FROM
  `top`
WHERE 
  `top_id` = :top_id
;";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':top_id', $_GET['top_id']);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ($row === false) {
    header("Location: index.php?error=nodatatodelete");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>admin</title>
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
    <p>voulez vous vraiment supprimer <span><?=$row['top_title']?></span> du top <span><?=$row['top_select']?></span> ?</p>
    <form action="dodelete_top.php" method="post">
        <input type="hidden" name="top_id" value="<?=$row['top_id']?>">
        <input type="submit" value="Oui" class="btn btn-danger">
        <a href="../admin.php" class="btn btn-primary">non</a>
    </form>
</div>
</body>
</html>