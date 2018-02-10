<?php
header('Content-Type: application/json');

try {
	$pdo = new PDO('mysql:host=localhost;port=3306;dbname=aos','root','root');
}
 catch (Exception $e) {
				retour_json(false, "Connexion impossible");
		}

function retour_json($succes,$msg,$results=NULL)	{
	$retour["succes"] = $succes;
	$retour["message"] = $msg;
	$retour["resultat"] = $results;

	echo json_encode($retour);
}

function user(){

$query = "SELECT * FROM users";
	  $stmt = $dbh->query($query);
		return $stmt->rowCount();
}
?>
