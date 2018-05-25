<?php
require_once "./connection.php";
require_once "./adminFunctions.php";

$info = getInfo($_GET['id'], $pdo);
?>
<table>
	<tr>
		<th>Key</th>
		<th>Value</th>
	</tr>
<?php
foreach ($info as $key => $value):
?>
	<tr>
		<td><?=$key?></td>
		<td><?=$value?></td>
	</tr>
<?php
endforeach;
?>
</table>
<br>
<a href="./index.php">Accueil</a>
<a href="./edit.php?id=<?=$_GET['id']?>">Modifier</a>
<a href="./delete.php?id=<?=$_GET['id']?>">Supprimer</a>