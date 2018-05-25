<?php
try {
    $conn = new PDO ('mysql:host=localhost;dbname=perfect_site', 'root', 'kirby');
} catch (PDOException $exception){
   echo $exception->getMessage();
   exit;
}
