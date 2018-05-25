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

<div class="Login-modal2">
    <div class="Login-modalOverlay2"></div>
    <div class="Login-modalContent2">
        <div class="Login-firstContainer2">
            <img class="Login-logo2" src="../../logo.d0d74df5.png" alt="">
            <div class="Login-textContainer2">
                <p>Un mook collector . Une application . Un site</p>
            </div>
        </div>
        <div class="Login-secondContainer2">
            <form  method="POST">
                <div class="Login-formulaireField2">
                    <input class="Login-field2" type="text" name="username">
                    <input class="Login-field2" type="email" name="email">
                    <input class="Login-field2" type="text" name="password">
                    <input class="Login-field2" type="text" name="password2">
                </div>
                <div class="Login-formulaireButton2">
                    <input class="Login-button2" type="submit" name="submit" value="Créer un compte">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $email = $_POST['email'];

    if ((isset($username)) && !empty($username) && (isset($password)) && !empty($password) && (isset($password2)) && !empty($password2)&& (isset($email)) && !empty($email))
    {
        if(strlen($username)>4 && strlen($username) <12)
        {
            if($password==$password2)
            {
                $password = sha1($password);

                require_once "../includes/connection.php";

                $ver = $pdo->prepare("SELECT * FROM users WHERE username='$username' OR email='$email'");
                $ver->execute();
                $count = $ver->fetchColumn();
                if ($count == 0)
                {
                    $req = $pdo->prepare('INSERT INTO users(id,username,password,email) VALUES(NULL, :username, :password, :email)');
                    $req->execute(array(
                        'username' => $username,
                        'password' => $password,
                        'email' => $email));
                    header("Location: login.php?success");
                } else echo '<script type="text/javascript">window.alert("Le pseudo ou le mail est déja utilisé");</script>';
            } else echo '<script type="text/javascript">window.alert("Les mots de passes ne sont pas identiques");</script>';
        } else echo '<script type="text/javascript">window.alert("Le pseudo doit être compris entre 4 et 12");</script>';
    } else echo '<script type="text/javascript">window.alert("Veuillez remplir tout les champs");</script>';
}
?>