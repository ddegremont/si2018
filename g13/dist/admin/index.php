<?php if (isset($_POST["user"]) === true && $_POST["user"] === "admin" && isset($_POST["pwd"]) === true && $_POST["pwd"] === "admin"): ?>

<?php
require_once "./connection.php";
 
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
            ;";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
?>

<table>
	<tr>
		<th>CONTINENT</th>
		<th>COUNTRY</th>
		<th>TYPE</th>
		<th>PICTURE_SRC</th>
		<th>NAME</th>
		<th>RATING</th>
		<th>LOCATION</th>
		<th>DESCRIPTION</th>
		<th>INFORMATION</th>
		<th>HOURS</th>
	</tr>
<?php
    while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)):
?>
	<tr>
		<td><a href="./show.php?id=<?=$row['id']?>"><?=$row['continent']?></a></td>
		<td><a href="./show.php?id=<?=$row['id']?>"><?=$row['country']?></a></td>
		<td><a href="./show.php?id=<?=$row['id']?>"><?=$row['type']?></a></td>
		<td><a href="./show.php?id=<?=$row['id']?>"><?=$row['pictureSrc']?></a></td>
		<td><a href="./show.php?id=<?=$row['id']?>"><?=$row['name']?></a></td>
		<td><a href="./show.php?id=<?=$row['id']?>"><?=$row['rating']?></a></td>
		<td><a href="./show.php?id=<?=$row['id']?>"><?=$row['location']?></a></td>
		<td><a href="./show.php?id=<?=$row['id']?>"><?=$row['description']?></a></td>
		<td><a href="./show.php?id=<?=$row['id']?>"><?=$row['information']?></a></td>
		<td><a href="./show.php?id=<?=$row['id']?>"><?=$row['hours']?></a></td>
	</tr>
<?php
	endwhile;
?>
</table>
<h2>Add Entry :</h2>
<form action="./doadd.php" method="post">
	continent : <input type="text" name="continent"><br>
	country : <input type="text" name="country"><br>
	type : <input type="text" name="type"><br>
	picture_src : <input type="text" name="pictureSrc"><br>
	name : <input type="text" name="name"><br>
	rating : <input type="text" name="rating"><br>
	location : <input type="text" name="location"><br>
	description : <input type="text" name="description"><br>
	information : <input type="text" name="information"><br>
	hours : <input type="text" name="hours"><br>
	<input type="submit" value="Submit">
</form>
<?php else: ?>
	<form action="" method="post">
	<?php if (isset($_POST["user"]) === true && empty($_POST["user"])): ?>
		<p style="color: red;">Username is empty.</p>
	<?php endif; ?>
		Username: <input type="text" name="user"><br>
	<?php if (isset($_POST["pwd"]) === true && empty($_POST["pwd"])): ?>
		<p style="color: red;">Password is empty.</p>
	<?php endif; ?>
		Password: <input type="password" name="pwd">
		<input type="submit">
	</form>
<?php endif; ?>