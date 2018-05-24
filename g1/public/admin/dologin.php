<?php

require_once "../includes/connection.php";


if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $requete = "SELECT
                    `prenom`,
                    `email`,
                    `password`
                    FROM
                    `Users`
                    WHERE
                    `email` = :email
;";

    $stmt = $conn->prepare($requete);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$row) {
        header('Location:index.php?error=N');
        exit;
    }

    $testPassword = password_verify($_POST['password'], $row['password']);

    if ($testPassword) {
        session_start();
        $_SESSION['prenom'] = $row ['prenom'];
        header('Location:index.php');
        exit;
    } else {
        header('Location:index.php?error=N');
        exit;
    }
}
