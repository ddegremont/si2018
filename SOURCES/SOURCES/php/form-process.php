<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Nom requis  ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email requis  ";
} else {
    $email = $_POST["email"];
}

// MSG SUBJECT
if (empty($_POST["msg_subject"])) {
    $errorMSG .= "Objet requis ";
} else {
    $msg_subject = $_POST["msg_subject"];
}


// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message requis ";
} else {
    $message = $_POST["message"];
}
// MESSAGE
if (empty($_POST["profil"])) {
    $errorMSG .= "Sélectionnez un profil ";
} else {
    $profil = $_POST["profil"];
}
// MESSAGE
if (empty($_POST["phone"])) {
    $errorMSG .= "Téléphone requis ";
} else {
    $phone = $_POST["phone"];
}
// MESSAGE
if (empty($_POST["company"]) && $_POST["profil"] != "Un lecteur") {
    $errorMSG .= "Saisir un nom de société si vous n'êtes pas lecteur";
} else {
    $company = $_POST["company"];
}


$EmailTo = "redaction@uneanneedevoyages.com";
$Subject = "UADV message de : " .$profil;

// prepare email body text
$Body = "";
$Body .= "Nom: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Objet: ";
$Body .= $msg_subject;
$Body .= "\n";
$Body .= "Profil: ";
$Body .= $profil;
$Body .= "\n";
$Body .= "Téléphone: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Société: ";
$Body .= $company;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "Envoie du mail réussi";
}else{
    if($errorMSG == ""){
        echo "Quelque chose s'est mal passé dans l'envoie du mail :(";
    } else {
        echo $errorMSG;
    }
}

?>