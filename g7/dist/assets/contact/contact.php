<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>

    <form method="POST">
        <select name="profil" required data-error="Selectionner un profil" size="1">
            <option value disabled selected>Vous êtes</option>
            <option value="Un journaliste">Un journaliste</option>
            <option value="Un lecteur">Un lecteur</option>
            <option value="Un partenaire">Un partenaire</option>
            <option value="Un office de tourisme">Un office de tourisme</option>
        </select></br></br>
        <label>Société:</label>
        <input type="text" name="company"></br></br>
        <label>Nom:</label>
        <input type="text" name="name"></br></br>
        <label>Prénom:</label>
        <input type="text" name="surname"></br></br>
        <label>Email:</label>
        <input type="email" name="email"></br></br>
        <label>Téléphone:</label>
        <input type="tel" name="phone"></br></br>
        <label>Message:</label>
        <textarea name="message"  cols="30" rows="10"></textarea></br></br>
        <input type="submit" name="contact" value="Envoyer">
    </form>

<?php


if(isset($_POST['contact']))
{
    $who = $_POST['profil'];
    $company = $_POST['company'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message =$_POST['message'];

    if(!empty($company) && !empty($name) && !empty($surname) && !empty($email) && !empty($phone) && !empty($message)){

        require_once "../includes/connection.php";
        $reqSql = 'INSERT INTO 
          `contact` (`id`,`who`,`company`,`name`,`surname`,`email`,`phone`,`message`) 
        VALUES
          (NULL, :who, :company, :name, :surname, :email, :phone, :message);';
        $req = $pdo->prepare($reqSql);
        $req->execute(array(
            'who'=> $who,
            'company' => $company,
            'name' => $name,
            'surname' => $surname,
            'email' => $email,
            'phone' => $phone,
            'message' => $message));


        header("Location: message.php");

    } else echo '<script type="text/javascript">window.alert("Veuillez saisir tout les champs");</script>';
}
?>

</body>
</html>