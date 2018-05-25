<?php
require_once "../includes/init_db.php";

$sql = "SELECT
            `id`,
            `name`,
            `signature`,
            `twitter-account`
        FROM
            `company`
        WHERE
            `id` = :id
        LIMIT
            1
;";
$stmt = $db->prepare($sql);
$stmt->bindParam(":id",$_GET['id'], PDO::PARAM_STR);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($row === false) {
    header("Location: ./?error");
    exit();
}

?>
<html lang="en" dir="ltr">
<head>
   <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Edit</title>
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/adminPanel/adminHeader.css">
        <link rel="stylesheet" href="../css/adminPanel/adminEdit.css">
   </head>
   <body>

    <header class="adminHeader">
        <h1 class="adminHeader_title">
            <a class="adminHeader_title_link" href="../admin.php">Admin Panel</a>
        </h1>
        <a class="adminHeader_returnLink" href="./">Revenir à la liste</a>            
    </header>
    
    <section class="AdminEdit">

        <h2 class="AdminEdit_title">Modifier la compagnie</h2>    
        <form enctype="multipart/form-data" action="doedit.php" method="post">
            <input type="hidden" name="company[id]" value="<?=$row["id"]?>">
            <label class="adminEdit_label" for="">Nom de la compagnie</label>
            <input class="adminEdit_input" type="text" name="company[name]" value="<?=$row["name"]?>">
            <label class="adminEdit_label" for="">Logo</label>
            
            <div class="adminEdit_inputFile_container">
                <div class="adminEdit_inputFile">
                    <input id="addFile" class="adminEdit_inputFileButton" type="file" name="company[logo]" value="">
                    <label class="adminEdit_inputFilelabel" for="addFile">Choisir un fichier</label>
                </div>
                <span class="adminEdit_inputFile_fileName">coucou</span>
            </div>

            <label class="adminEdit_label" for="">Signature</label>
            <input class="adminEdit_input" type="text" name="company[signature]" value="<?=$row["signature"]?>">
            <label class="adminEdit_label" for="">Compte Twitter</label>
            <input class="adminEdit_input" type="text" name="company[twitter-account]" value="<?=$row["twitter-account"]?>"> 
            <input class="adminEdit_submit" type="submit" value="Modifier">
        </form>

    </section>
    <script>
        var fileUpload = {
            input: document.querySelector('.adminEdit_inputFileButton'),
            show: document.querySelector('.adminEdit_inputFile_fileName')
        }

        if (fileUpload.input.files.length === 0) {
            fileUpload.show.textContent = "Pas de fichier selectionné";
        } else {
            fileUpload.show.textContent = fileUpload.input.files[0].name;
        }

        fileUpload.input.addEventListener('input', function () {
            console.log(fileUpload.input.files[0]);
            fileUpload.show.textContent = fileUpload.input.files[0].name
        })
    </script>
   </body>

</html>
