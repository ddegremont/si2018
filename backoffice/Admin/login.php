<?php
/**
 * Created by PhpStorm.
 * User: guillaume
 * Date: 23/05/2018
 * Time: 10:33
 */
session_start();
require_once "../connection.php";
if (true) {
    if (!empty($_POST['pseudo']) || !empty($_POST['password'])) {
        $pseudo = htmlentities($_POST['pseudo']);
        $password = htmlentities($_POST['password']);
//Check if input is not empty
        if (!empty($pseudo) && !empty($password)) {
//Get mail and password from db
            $requete = "SELECT
`pseudo`,
`password`
FROM
`Admin`
WHERE
`pseudo` = :pseudo AND
`password` = :password
;";
            $stmt = $connection->prepare($requete);
            $stmt->bindParam(':pseudo', $pseudo);
            $stmt->bindParam(':password', $password);
            $stmt->execute();
            $user = $stmt->fetch();
            $_SESSION['logged'] = 'true';
            if ($user) {
                header('location: ../index.php');
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
</head>
<body>
<div class="content">
    <img class="logo" src="../img/ViandeLogo.png" alt="">
    <div class="formContainer">
        <h1 class="title">Admin</h1>
        <form class="" action="" method="post">
            <div class="formFlex">
                <input class="loginInput" type="text" name="pseudo" value="" placeholder="Votre pseudo">
                <input class="loginInput" type="password" name="password" value="" placeholder="Votre mot de passe">
                <input class="submitInput" type="submit" name="submit" value="Se Connecter">
                <p class="error" style="color: white; text-align: center;"><?=$_SESSION['error']?></p>
                <a href="admin.php" class="link" style=" margin: 0 auto;">
                </a>
            </div>
        </form>