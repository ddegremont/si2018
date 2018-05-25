<?php
/**
 * Created by PhpStorm.
 * User: hichemamb
 * Date: 22/05/2018
 * Time: 02:34
 */

if(isset($_POST['submit']))
{
    $category= $_POST['category'];
    $title = $_POST['title'];
    $subTitle = $_POST['sub-title'];
    $img = $_FILES['img']['name'];
    $p = $_POST['p'];
    $auteur = $_POST['auteur'];
    $logo = $_FILES['logo']['name'];

    if(!empty($category) && !empty($title) && !empty($subTitle) && !empty($img) && !empty($p) && !empty($auteur) && !empty($logo)){

        require_once "../includes/connection.php";
        $reqSql = 'INSERT INTO 
          `article` (`id`,`category`, `title`,`sub-title`,`img`,`p`,`auteur`,`logo`) 
        VALUES
          (NULL, :category, :title, :subTitle, :img, :p, :auteur, :logo);';
        $req = $pdo->prepare($reqSql);
        $req->execute(array(
            'category' => $category,
            'title' => $title,
            'subTitle' => $subTitle,
            'img' => $img,
            'p' => $p,
            'auteur' => $auteur,
            'logo' => $logo));


        header("Location: ../../../src/index.php");

    } else echo '<script type="text/javascript">window.alert("Veuillez saisir tout les champs");</script>';
}

