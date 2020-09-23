<?php

require_once '../core/autoloader.php';
use classes\DB;

$db = DB::getInstance();
var_dump($db);
$conn = $db->conn();
$query = $conn->prepare('SELECT * FROM users');
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
var_dump($result);