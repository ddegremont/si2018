<?php
require_once "../connexion.php";

$sql = "INSERT INTO
            top
            (top_id, top_class, top_title, top_city, top_select)
            VALUES
            (NULL, :top_class, :top_title, :top_city, :top_select)
            ;
            ";

            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':top_class', $_POST['top_class']);
            $stmt->bindValue(':top_title', $_POST['top_title']);
            $stmt->bindValue(':top_city', $_POST['top_city']);
            $stmt->bindValue(':top_select', $_POST['top_select']);
            $stmt->execute();
            header("Location: ../index.php");
