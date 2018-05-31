<?php
include_once ('Database.php');
$host = 'localhost:3306';
$db   = 'blog';
$user = 'root';
$pass = '';
$charset = 'utf8';
$database = new Database($host, $db, $user, $pass);
return $database;
?>