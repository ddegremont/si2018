
<?php
/**
 * ce fichier permet de se connecter à la base de données mysql
 * $db = new PDO(dsn: 'database;server', username: 'mysqlusername', password:'mysqlpass');
 */
try {
    $db = new PDO('mysql:dbname=PerfectSite; host=localhost', 'root', 'root');
} catch (PDOException $exception) {
    die($exception->getMessage());
}

