<?php
$dsn = 'mysql:host=localhost;dbname=aos;charset=utf8';
$user = 'root';
$pass = 'root';

$options = array();// Tableau des options

//Creer une instance de PDO
$dbh = new PDO($dsn,$user,$pass,$options);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>
