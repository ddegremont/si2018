<?php
/**
 * Created by PhpStorm.
 * User: travailleur
 * Date: 23/05/2018
 * Time: 23:15
 */
require_once "../connexion.php";

$sql = "INSERT INTO
            fp
            (fp_id, fp_title, fp_subtitle, fp_src, fp_text, fp_sign, fp_logo, fp_select)
            VALUES
            (NULL, :fp_title, :fp_subtitle, :fp_src, :fp_text, :fp_sign, :fp_logo, :fp_select)
            ;
            ";

$stmt = $conn->prepare($sql);
$stmt->bindValue(':fp_title', $_POST['fp_title']);
$stmt->bindValue(':fp_subtitle', $_POST['fp_subtitle']);
$stmt->bindValue(':fp_src', $_POST['fp_src']);
$stmt->bindValue(':fp_text', $_POST['fp_text']);
$stmt->bindValue(':fp_sign', $_POST['fp_sign']);
$stmt->bindValue(':fp_logo', $_POST['fp_logo']);
$stmt->bindValue(':fp_select', $_POST['fp_select']);
$stmt->execute();



header("Location: ../admin.php");