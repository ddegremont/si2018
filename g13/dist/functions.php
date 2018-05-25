<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=G13Voyage', 'root', '8V4B7u3g');
    $pdo->exec("SET NAMES UTF8");
} catch (PDOException $exception) {
    require "./databaseDied.php";
    die($exception->getMessage());
}

function getInfo($continent, $country, $type, $pdo) {
	$sql = "SELECT
		`continent`,
		`country`,
		`type`,
		`pictureSrc`,
		`name`,
		`rating`,
		`location`,
		`description`,
		`information`,
		`hours`
		FROM 
		`article` 
		WHERE 
		`continent` = :continent and
		`country` = :country and
		`type` = :type
		;";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':continent',$continent);
    $stmt->bindValue(':country',$country);
    $stmt->bindValue(':type',$type);
    $stmt->execute();
    return $stmt;
}