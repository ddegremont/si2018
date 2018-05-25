<?php
/**
 * Created by PhpStorm.
 * User: hichemamb
 * Date: 22/05/2018
 * Time: 02:35
 */

require_once "../includes/connection.php";

$reqSql = 'DELETE FROM
  `users` 
WHERE 
  `id`=:id
LIMIT 1';
$req = $pdo->prepare($reqSql);
$req->bindValue(':id', $_GET['id'], PDO::PARAM_INT);

$req->execute();