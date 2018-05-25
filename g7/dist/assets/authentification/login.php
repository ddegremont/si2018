<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Domine:400,700|Montserrat:400,500,500i,700" rel="stylesheet">
    <title>semaine intensive yolo</title>
    <link rel="stylesheet" href="../../src.9b8776ed.css"></head>
<body>

<section class="Login">
    <div class="Login-modal">
        <div class="Login-modalOverlay"></div>
        <div class="Login-modalContent">
            <div class="Login-firstContainer">
                <img class="Login-logo" src="../../logo.d0d74df5.png" alt="">
                <div class="Login-textContainer">
                    <p>Un mook collector . Une application . Un site</p>
                </div>
            </div>
            <div class="Login-secondContainer">
                <form  method="POST">
                    <div class="Login-formulaireField">
                        <input class="Login-field" type="text" name="username">
                        <input class="Login-field" type="text" name="password">
                    </div>
                    <div class="Login-formulaireButton">
                        <form method="POST"></form>
                        <a href="register.php"><input id="buttonRegister" class="Login-button" type="button" name="register" value="Créer un compte"></a>
                        <input class="Login-button" type="submit" name="submit" value="Connexion">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>


<?php

if(isset($_GET['success'])) {
    echo '<script type="text/javascript">window.alert("Inscription terminée , vous pouvez vous connectez");</script>';
}
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ((isset($username)) && !empty($username) && (isset($password)) && !empty($password))
    {

        require_once "../includes/connection.php";
        $password = sha1($password);

        $req = $pdo->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
        $req->execute( array(
            'username'  =>  $username,
            'password'  =>  $password
        ));
        $count = $req->fetchColumn();
        if($count > 0)
        {

            session_start();
            $_SESSION['username']=$username;
            header("Location: ../../profil.php");
        } else echo '<script type="text/javascript">window.alert("Identifiant ou mot de passe incorrect");</script>';
    } else echo '<script type="text/javascript">window.alert("Veuillez saisir tout les champs");</script>';
}
?>