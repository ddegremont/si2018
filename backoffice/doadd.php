<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 19/04/2018
 * Time: 19:14
 */

require_once "connection.php";

if (empty($_POST['#']) || empty($_POST['#']) || empty($_POST['#']) || empty($_POST['#'])||
    empty($_POST['#']) || empty($_POST['#']) || empty($_POST['#']) ||
    empty($_POST['#']) || empty($_POST['#'])) {
    header('Location: error.php');
    exit;
}

$request = 'INSERT INTO
          `#` 
          ()
        VALUES
          ()
;';

$stmt = $connection->prepare($request);
$stmt->bindParam(':title', htmlentities($_POST['#']));
$stmt->bindParam(':h1', htmlentities($_POST['#']));
$stmt->bindParam(':p', htmlentities($_POST['#']));
$stmt->bindParam(':spanclass', htmlentities($_POST['#']));
$stmt->bindParam(':spantext', htmlentities($_POST['#']));
$stmt->bindParam(':imgalt', htmlentities($_POST['#']));
$stmt->bindParam(':imgsrc', htmlentities($_POST['#']));
$stmt->bindParam(':navtitle', htmlentities($_POST['#']));
$stmt->bindParam(':slug', htmlentities($_POST['#']));
$stmt->execute();
header('Location: admin.php');
