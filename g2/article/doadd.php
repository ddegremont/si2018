<?php
require_once "../includes/init_db.php";

if (!isset($_POST["article"]) || $_POST["article"]["title"]=="" || $_POST["article"]["subtitle"]=="" || $_POST["article"]["text"]=="" || $_POST["article"]["company"]==""  || $_POST["article"]["slug"]=="" ) {
    header("Location: ./?error");
    exit();
}

$article = $_POST['article'];

//vérifie que le fichier choisi est une image
$check = getimagesize($_FILES['article']["tmp_name"]["img"]);
if($check === false) {
    header('Location: ./?error_file_format');
    exit();
}

$extension=pathinfo($_FILES["article"]['name']['img'], PATHINFO_EXTENSION);

$sql = "INSERT INTO
   `article`
   (`id`, `title`, `subtitle`, `img`, `text`, `company`, `slug`)
      VALUES
   (NULL, :title, :subtitle, :img, :text, :company, :slug)
;";

$stmt = $db->prepare($sql);
$stmt->bindValue(':title', $article['title']);
$stmt->bindValue(':subtitle', $article['subtitle']);
$stmt->bindValue(':img', $extension);
$stmt->bindValue(':text', $article['text']);
$stmt->bindValue(':company', $article['company']);
$stmt->bindValue(':slug', $article['slug']);
$stmt->execute();

$target_file = "../uploads/article/" . $db->lastInsertId() . "." . $extension;
move_uploaded_file($_FILES['article']["tmp_name"]["img"], "./".$target_file);

header('Location: ./?id='.$db->lastInsertId());
