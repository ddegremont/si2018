<?php

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
    header("Location: index.php?error=nodatatoedit");
    exit;
    }
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>edit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <style>
    h1{

    transform: translateY(-150px);
    }
    form{
    position: absolute;
    left: 50%;
    top:50%;
    transform: translate(-50%,-50%);
    }
    input[type="submit"]{
        margin-top: 10px;
    }
    </style>
</head>
<body>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../admin.php">admin</a></li>
        <li class="breadcrumb-item"><a href="../crud.php">crud</a></li>
    </ol>
</nav>
<form action="doedit_bat.php" class="form-group" method="post">
    <h1>modifier l'image</h1>
    <input type="hidden" name="bat_id" value="<?=$row['bat_id']?>">
    <label for="">image</label>
    <input type="text" class="form-control form-control-sm" name="bat_src" value="<?=$row['bat_src']?>">
    <label for="">title</label>
    <input type="text" c name="bat_title" value="<?=$row['bat_title']?>">
    <label for="">description</label>
  <textarea class="form-control" name="bat_desc"><?=$row['bat_desc']?></textarea>
    <input class="btn btn-primary" type="submit" value="Modifier">
</form>

</body>
</html>