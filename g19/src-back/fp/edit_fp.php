<?php
/**
 * Created by PhpStorm.
 * User: travailleur
 * Date: 23/05/2018
 * Time: 23:59
 */

if (!isset($_GET['fp_id'])) {
    header("Location: ../index.php?error=noidtoedit");
    exit;
}
require_once "../connexion.php";

$sql = "SELECT
  `fp_id`,
  `fp_title`,
  `fp_subtitle`,
  `fp_src`,
  `fp_text`,
  `fp_sign`,
  `fp_logo`,
  `fp_select`
FROM
  `fp`
WHERE
  `fp_id` = :fp_id
;";

$stmt = $conn->prepare($sql);
$stmt->bindValue(':fp_id', $_GET['fp_id']);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ($row === false) {
    header("Location: ../index.php?error=nodatatoedit");
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

            transform: translateY(-100px);
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
<form action="doedit_fp.php" class="form-group" method="post">
    <h1>modidifer cette article</h1>
    <input type="hidden" name="fp_id" value="<?=$row['fp_id']?>">
    <label for="">title</label>
    <input type="text" name="fp_title" class="form-control form-control-sm" value="<?=$row['fp_title']?>">
    <label for="">subtitle</label>
    <input type="text" name="fp_subtitle" class="form-control form-control-sm" value="<?=$row['fp_subtitle']?>">
    <label for="">image</label>
    <input type="text" name="fp_src" class="form-control form-control-sm" value="<?=$row['fp_src']?>">
    <label for="">text</label>
    <textarea class="form-control" name="fp_text"><?=$row['fp_text']?></textarea>
    <label for="">signature</label>
    <input class="form-control form-control-sm" type="text" name="fp_sign" value="<?=$row['fp_sign']?>">
    <label for="">logo</label>
    <input class="form-control form-control-sm" type="text" name="fp_logo" value="<?=$row['fp_logo']?>">
    <label for="">section</label>
    <select type="select" name="fp_select" class="form-control form-control-sm">
        <option value="fp">fiche pratique</option>
        <option value="avion" selected>bon plan aérien</option>
    </select>
    <input type="submit" value="Modifier" class="btn btn-primary">
</form>

</body>
</html>
