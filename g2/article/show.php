<?php
require_once "../includes/init_db.php";

$sql = "SELECT
            `id`,
            `title`,
            `subtitle`,
            `img`,
            `text`,
            `company`,
            `slug`
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
}

$sqlCompany = "SELECT
            `id`,
            `name`,
            `logo`,
            `signature`
        FROM
            `company`
        WHERE
            `id` = :id
        LIMIT
            1
;";
$stmtCompany = $db->prepare($sqlCompany);
$stmtCompany->bindParam(":id",$row['company'], PDO::PARAM_STR);
$stmtCompany->execute();
$rowCompany = $stmtCompany->fetch(PDO::FETCH_ASSOC);

if ($rowCompany === false) {
    // header("Location: ./?error");
}
?>


    <html lang="en" dir="ltr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>
            <?=$row['title']?>
        </title>
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/adminPanel/adminHeader.css">
        <link rel="stylesheet" href="../css/adminPanel/adminShow.css">
    </head>

    <body>
        <header class="adminHeader">
            <h1 class="adminHeader_title">
                <a class="adminHeader_title_link" href="../admin.php">Admin Panel</a>
            </h1>
            <a class="adminHeader_returnLink" href="./">Revenir à la liste</a>
        </header>

        <section class="adminShow">
            <h2 class="adminShow_title">Détails de l'article</h2>
            <h3 class="adminShow_label">id</h3>
            <p class="adminShow_text">
                <?=htmlspecialchars($row['id'])?>
            </p>
            <h3 class="adminShow_label">title</h3>
            <p class="adminShow_text">
                <?=htmlspecialchars($row['title'])?>
            </p>
            <h3 class="adminShow_label">subtitle</h3>
            <p class="adminShow_text">
                <?=htmlspecialchars($row['subtitle'])?>
            </p>
            <h3 class="adminShow_label">img</h3>
            <img class="adminShow_img" src="../uploads/article/<?php echo $row['id'] . "." . $row['img']; ?>" alt="">
            <h3 class="adminShow_label">text</h3>
            <p class="adminShow_text">
                <?=nl2br(htmlspecialchars($row['text']))?>
            </p>
            <h3 class="adminShow_label">company</h3>
            <p class="adminShow_text">
                <?=htmlspecialchars($rowCompany['name'])?>
            </p>
            <h3 class="adminShow_label">logo company</h3>
            <img class="adminShow_img" src="../uploads/company/<?php echo $rowCompany['id'] . "." . $rowCompany['logo']; ?>" alt="">
            <h3 class="adminShow_label">signature company</h3>
            <p class="adminShow_text">
                <?=htmlspecialchars($rowCompany['signature'])?>
            </p>
            <h3 class="adminShow_label">slug</h3>
            <p class="adminShow_text">
                <?=htmlspecialchars($row['slug'])?>
            </p>
        </section>
        <section class="adminButtonSection">
            <a class="adminButtonSection_editLink" href="edit.php?id=<?=$_GET['id']?>">Modifier</a>
            <a class="adminButtonSection_deleteLink" href="delete.php?id=<?=$_GET["id"]?>">Supprimer</a>
        </section>
    </body>

    </html>