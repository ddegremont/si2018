<?php
require_once "./connection.php";
$sql = "
SELECT ".
  $_GET['col']
." FROM ".
  $_GET['category']
." WHERE
  `id` BETWEEN :from AND :to
;";
$stmt = $connection->prepare($sql);
$stmt->bindParam(':from',$_GET['from'], PDO::PARAM_STR);
$stmt->bindParam(':to',$_GET['to'], PDO::PARAM_STR);
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);