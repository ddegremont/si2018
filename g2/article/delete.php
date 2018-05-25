<?php
require_once "../includes/init_db.php";

$sql = "SELECT
            `title`
        FROM
            `article`
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
        <title>Delete</title>
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/adminPanel/adminHeader.css">
        <link rel="stylesheet" href="../css/adminPanel/adminDelete.css">
    </head>

    <body>
        <header class="adminHeader">
            <h1 class="adminHeader_title">
                <a class="adminHeader_title_link" href="../admin.php">Admin Panel</a>
            </h1>
        </header>
        <section class="adminDelete">
            <p class="adminDelete_warning">Êtes-vous sûr de vouloir supprimer l'article "<?=$row["title"]?>" ?</p>
            <form class="adminDelete_form" action="dodelete.php" method="POST">
                <input type="hidden" name="id" value="<?=$_GET["id"]?>">
                <input class="adminDelete_button" type="submit" value="Oui">
                <input class="adminDelete_button" type="button" value="Non" onclick="javascript: history.back()">
            </form>
        </section>
    </body>

    </html>