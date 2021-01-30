<?php
require_once "./connection.php";
require_once "./adminFunctions.php";

testForm($_POST);
updateDb($_POST, $pdo, $_POST['id']);