<?php
require_once "./connection.php";
require_once "./adminFunctions.php";

deleteFromDb($_POST, $pdo, $_POST['id']);