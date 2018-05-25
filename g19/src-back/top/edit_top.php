<?php

if (!isset($_GET['top_id'])) {
    header("Location: index.php?error=noidtoedit");
    exit;
}
require_once "../connexion.php";

$sql = "SELECT
  `top_id`,
  `top_class`,
  `top_title`,
  `top_select`,
  `top_city`
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
     <form class="form-group" action="doedit_top.php" method="post">
         <h1>modifier les top</h1>
    <input class="form-control form-control-sm" type="hidden" name="top_id" value="<?=$row['top_id']?>">
    <label for="">classement</label>
         <input class="form-control form-control-sm" type="text" name="top_class" value="<?=$row['top_class']?>">
    <label for="">title</label>
         <input class="form-control form-control-sm" type="text" name="top_title" value="<?=$row['top_title']?>">
    <label for="">city</label>
         <input class="form-control form-control-sm" type="text" name="top_city" value="<?=$row['top_city']?>">
         <label for="">categories</label>
    <select type="select" name="top_select" class="form-control form-control-sm">
      <option value="Restaurant">Restaurant</option>
      <option value="hotel" selected>hotel</option>
      <option value="spa">spa</option>
    </select>
    <input type="submit" value="Modifier" class="btn btn-primary">
</form>

   </body>
 </html>