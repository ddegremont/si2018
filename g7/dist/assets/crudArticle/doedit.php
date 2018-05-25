<?php
/**
 * Created by PhpStorm.
 * User: hichemamb
 * Date: 22/05/2018
 * Time: 02:35
 */

if(isset($_POST['submit']))
{
    $category= $_POST['category'];
    $id = $_GET['id'];
    $title = $_POST['title'];
    $subTitle = $_POST['sub-title'];
    $img = $_FILES['img']['name'];
    $p = $_POST['p'];
    $auteur = $_POST['auteur'];
    $logo = $_FILES['logo']['name'];

    if(!empty($category) && !empty($title) && !empty($subTitle) && !empty($img) && !empty($p) && !empty($auteur) && !empty($logo)){

        require_once "../includes/connection.php";
        $reqSql = ' UPDATE 
          `article` 
        SET 
          `category` = :category,`title` = :title,`sub-title` = :subTitle,`img` = :img,`p` = :p,`auteur`= :auteur,`logo`= :logo 
        WHERE 
          `id` = :id;';
        $req = $pdo->prepare($reqSql);
        $req->execute(array(
            'id'=>$id,
            'category' => $category,
            'title' => $title,
            'subTitle' => $subTitle,
            'img' => $img,
            'p' => $p,
            'auteur' => $auteur,
            'logo' => $logo));


        header("Location: gestion.php");

    } else echo '<script type="text/javascript">window.alert("Veuillez saisir tout les champs");</script>';
}

