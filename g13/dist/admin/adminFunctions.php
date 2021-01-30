<?php

function testForm(&$data) {
	foreach ($data as $key => &$value) {
		$value = htmlentities($value);
		if ($value === "") {
			header("Location: ./index.php");
			
			exit();
		}
	}
}

function addToDb($data, $pdo) {
	$sql = "INSERT INTO
	`article`
	(`continent`, `country`, `type`, `pictureSrc`, `name`, `rating`, `location`, `description`, `information`, `hours`)
	VALUES
	(:continent, :country, :type, :pictureSrc, :name, :rating, :location, :description, :information, :hours)
	;";
	$stmt = $pdo->prepare($sql);
	$stmt->bindValue(':continent', $data['continent']);
	$stmt->bindValue(':country', $data['country']);
	$stmt->bindValue(':type', $data['type']);
	$stmt->bindValue(':pictureSrc', $data['pictureSrc']);
	$stmt->bindValue(':name', $data['name']);
	$stmt->bindValue(':rating', $data['rating']);
	$stmt->bindValue(':location', $data['location']);
	$stmt->bindValue(':description', $data['description']);
	$stmt->bindValue(':information', $data['information']);
	$stmt->bindValue(':hours', $data['hours']);
	$stmt->execute();
	header("Location: ./index.php");

	exit();
}

function updateDb($data, $pdo, $id) {
	$sql = "UPDATE
	`article`
	SET
	`continent` = :continent,
	`country` = :country,
	`type` = :type,
	`pictureSrc` = :pictureSrc,
	`name` = :name,
	`rating` = :rating,
	`location` = :location,
	`description` = :description,
	`information` = :information,
	`hours` = :hours
	WHERE
	`id` = :id
	;";
	$stmt = $pdo->prepare($sql);
	$stmt->bindValue(':continent', $data['continent']);
	$stmt->bindValue(':country', $data['country']);
	$stmt->bindValue(':type', $data['type']);
	$stmt->bindValue(':pictureSrc', $data['pictureSrc']);
	$stmt->bindValue(':name', $data['name']);
	$stmt->bindValue(':rating', $data['rating']);
	$stmt->bindValue(':location', $data['location']);
	$stmt->bindValue(':description', $data['description']);
	$stmt->bindValue(':information', $data['information']);
	$stmt->bindValue(':hours', $data['hours']);
	$stmt->bindValue(':id', $id);
	$stmt->execute();
	header("Location: ./index.php");

	exit();
}

function deleteFromDb($data, $pdo, $id) {
	$sql = "DELETE FROM
	`article`
	WHERE
	`id` = :id
	;";
	$stmt = $pdo->prepare($sql);
	$stmt->bindValue(':id', $id);
	$stmt->execute();
	header("Location: ./index.php");
}

function getInfo($id, $pdo) {
	$sql = "SELECT
`id`, 
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
		`id` = :id
		LIMIT 1
		;";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id',$id);
    $stmt->execute();
    if (false === $row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        return null;
    }

    return $row;

}