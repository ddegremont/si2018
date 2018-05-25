<?php
require_once "./connection.php";
require_once "./adminFunctions.php";

testForm($_POST);
addToDb($_POST, $pdo);
